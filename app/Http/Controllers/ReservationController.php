<?php
namespace App\Http\Controllers;
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ChaletsReservation;
use App\Models\Guests;
use App\Models\Chalets;
use Illuminate\Support\Facades\Auth;

class ReservationController extends Controller
{
    public function create($chalet_id)
    {
        $chalet = Chalets::find($chalet_id);
        $guests = Guests::all();
        $reservedRanges = ChaletsReservation::where('chalet_id', $chalet_id)
            ->get(['from', 'to'])
            ->map(function($date) {
                $period = new \DatePeriod(
                    new \DateTime($date->from),
                    new \DateInterval('P1D'),
                    (new \DateTime($date->to))->modify('+1 day')
                );
                return iterator_to_array($period);
            })
            ->flatten()
            ->map(function($date) {
                return $date->format('Y-m-d');
            })
            ->values(); // لتجنب الفهارس غير المتسلسلة

        return view('website.reservation', compact('guests', 'chalet', 'reservedRanges'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'from' => 'required|date|after:today',
            'to' => 'required|date|after:from',
        ]);

        $chalet_id = $request->input('chalet_id');
        $from = new \DateTime($request->input('from'));
        $to = (new \DateTime($request->input('to')))->modify('+1 day');

        $existingReservations = ChaletsReservation::where('chalet_id', $chalet_id)
            ->where(function($query) use ($from, $to) {
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
        ChaletsReservation::create($data);

        return redirect()->route('main')->with('success', 'تم الحجز بنجاح!');
    }
}
