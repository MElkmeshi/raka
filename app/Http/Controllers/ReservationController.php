<?php

namespace App\Http\Controllers;

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ChaletsReservation;
use App\Models\Guests;
use App\Models\Chalets;
use Illuminate\Support\Facades\Auth;
use Plutu\Services\PlutuLocalBankCards;


class ReservationController extends Controller
{
    public function create($chalet_id)
    {
        $chalet = Chalets::find($chalet_id);
        $guests = Guests::all();
        $reservedRanges = ChaletsReservation::where('chalet_id', $chalet_id)
            ->get(['from', 'to'])
            ->map(function ($date) {
                $period = new \DatePeriod(
                    new \DateTime($date->from),
                    new \DateInterval('P1D'),
                    (new \DateTime($date->to))->modify('+1 day')
                );
                return iterator_to_array($period);
            })
            ->flatten()
            ->map(function ($date) {
                return $date->format('Y-m-d');
            })
            ->values(); // لتجنب الفهارس غير المتسلسلة

        return view('website.reservation', compact('guests', 'chalet', 'reservedRanges'));
    }

    public function store(Request $request)
    {
        // $request->validate([
        //     'from' => 'required|date|after:today',
        //     'to' => 'required|date|after:from',
        // ]);

        $chalet_id = $request->input('chalet_id');
        $from = new \DateTime($request->input('from'));
        $to = (new \DateTime($request->input('to')))->modify('+1 day');

        $existingReservations = ChaletsReservation::where('chalet_id', $chalet_id)
            ->where(function ($query) use ($from, $to) {
                $query->whereBetween('from', [$from, $to])
                    ->orWhereBetween('to', [$from, $to])
                    ->orWhereRaw('? BETWEEN `from` AND `to`', [$from])
                    ->orWhereRaw('? BETWEEN `from` AND `to`', [$to]);
            })
            ->exists();

        if ($existingReservations) {
            return back()->withErrors(['date' => 'التواريخ المحددة تتداخل مع حجز موجود.']);
        }

        $data = $request->only('from', 'to', 'guest_id', 'chalet_id');
        $data['guest_id'] = Auth::guard('guests')->user()->id;
        $chaletReservation = ChaletsReservation::create($data);
        $chalet = Chalets::find($chalet_id);
        $amount = $chalet->category->price * $from->diff($to)->days * 0.1;
        $invoiceNo = $chaletReservation->id;
        $returnUrl = 'http://localhost:8000/callback/handler';
        try {
            $api = new PlutuLocalBankCards;
            $api->setCredentials('984adf4c-44e1-418f-829b', 'eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJhdWQiOiIxIiwianRpIjoiZjRiNmE2MmEyYmI0ZGUzMGMxMjRhZjNkNjAxMzAzYjU5Y2I0ZmZjZDBiMDc3OWNhMDFjNzkyZjNlOTk4M2E0NDA0MmM3MWU4MzEyNjUzMGYiLCJpYXQiOjE3MjExMzgxNDYuODcwODk2LCJuYmYiOjE3MjExMzgxNDYuODcwODk4LCJleHAiOjIwMzY2NzA5NDYuODY0OTk1LCJzdWIiOiI5MzMiLCJzY29wZXMiOlsic2FuZGJveCJdfQ.jTrEkbirBbl-V7RlcJGSzvE1BCS81CzLu-XQfbad6WsYLLdoFTgaIMBZnXPAceQQkPxJrgO44iCR5zvECz0WwXe2Bj0SU-3rXhA2R_y17VErcsBW8S2JsrU3txt0sL7TckU3wz2t4kEux0JIHJHRHU4mSSYCgJqk4MqWflrBLYeJOOjj1v_Lca6ya3WshWA_bCKzUifSAvpPMjDvQiULVV1_uIhSdo9CXHFUvlY0gvcgTyawN8C72WSwpk1oATSV-iuxve--1WFYHt8R8MJ0_e-MYg-GD42KECFms6IVGny7eiEPPfnWXUu7J3gp0NOAFYzKCgzTFKw1Xo57e610oTj02fzNpz6Ph7T5rZ46ScdggOQN09dPR4dsIjvPpoO69eBDqADuf7_ofycjT2_zZ2tX1uLts-03y_BFtRnpHitHcOnB1SQYWapucp5lQqT8dgEzjS7EafRMDpk9dXdIibqzj8fxRT5REvG6J9u57LtbeHPutU98w--lxEP4LuaXOSSIhot-0SvN1ajTGfMtO9wHbdXhpSfQhp6NuO_WAbinv8zjeytI-MIjpTQCGSQ6jTY415ML5AG6DezOtMvN4nYUO9ORaFoVnrKrR8iYaweGiI1Ax3RMD3YWZBYoYXNbY8VbqMNhfnh5pe1SRNZN7RN7LGFQZi-R88SVHxj-SnE', 'sk_010a70ba86a3b648ae07a75e30ba7ecd4a6e67ff');
            $apiResponse = $api->confirm($amount, $invoiceNo, $returnUrl);
            if ($apiResponse->getOriginalResponse()->isSuccessful()) {
                $redirectUrl = $apiResponse->getRedirectUrl();
                return redirect($redirectUrl);
            } elseif ($apiResponse->getOriginalResponse()->hasError()) {
                return redirect()->route('main')->with('success', 'تم الحجز بنجاح!');
            }
        } catch (\Exception $e) {
            return redirect()->route('main')->with('success', 'تم الحجز بنجاح!');
        }
    }
}
