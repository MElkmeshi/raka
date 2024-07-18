<?php

namespace App\Http\Controllers;

use App\Models\ChaletsReservation;
use Illuminate\Http\Request;
use Plutu\Services\PlutuLocalBankCards;

class PaymentController extends Controller
{
    public function handleCallback(Request $request, PlutuLocalBankCards $api)
    {
        $api->setCredentials('984adf4c-44e1-418f-829b', 'eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJhdWQiOiIxIiwianRpIjoiZjRiNmE2MmEyYmI0ZGUzMGMxMjRhZjNkNjAxMzAzYjU5Y2I0ZmZjZDBiMDc3OWNhMDFjNzkyZjNlOTk4M2E0NDA0MmM3MWU4MzEyNjUzMGYiLCJpYXQiOjE3MjExMzgxNDYuODcwODk2LCJuYmYiOjE3MjExMzgxNDYuODcwODk4LCJleHAiOjIwMzY2NzA5NDYuODY0OTk1LCJzdWIiOiI5MzMiLCJzY29wZXMiOlsic2FuZGJveCJdfQ.jTrEkbirBbl-V7RlcJGSzvE1BCS81CzLu-XQfbad6WsYLLdoFTgaIMBZnXPAceQQkPxJrgO44iCR5zvECz0WwXe2Bj0SU-3rXhA2R_y17VErcsBW8S2JsrU3txt0sL7TckU3wz2t4kEux0JIHJHRHU4mSSYCgJqk4MqWflrBLYeJOOjj1v_Lca6ya3WshWA_bCKzUifSAvpPMjDvQiULVV1_uIhSdo9CXHFUvlY0gvcgTyawN8C72WSwpk1oATSV-iuxve--1WFYHt8R8MJ0_e-MYg-GD42KECFms6IVGny7eiEPPfnWXUu7J3gp0NOAFYzKCgzTFKw1Xo57e610oTj02fzNpz6Ph7T5rZ46ScdggOQN09dPR4dsIjvPpoO69eBDqADuf7_ofycjT2_zZ2tX1uLts-03y_BFtRnpHitHcOnB1SQYWapucp5lQqT8dgEzjS7EafRMDpk9dXdIibqzj8fxRT5REvG6J9u57LtbeHPutU98w--lxEP4LuaXOSSIhot-0SvN1ajTGfMtO9wHbdXhpSfQhp6NuO_WAbinv8zjeytI-MIjpTQCGSQ6jTY415ML5AG6DezOtMvN4nYUO9ORaFoVnrKrR8iYaweGiI1Ax3RMD3YWZBYoYXNbY8VbqMNhfnh5pe1SRNZN7RN7LGFQZi-R88SVHxj-SnE', 'sk_010a70ba86a3b648ae07a75e30ba7ecd4a6e67ff');
        $parameters = $request->all();

        try {
            $callback = $api->callbackHandler($parameters);
            $transactionId = $callback->getParameter('invoice_no');
            $reservation = ChaletsReservation::findOrFail($transactionId);
            if ($callback->isApprovedTransaction()) {
                $reservation->is_paid = true;
                $reservation->save();
                $amount = $callback->getParameter('amount');
                // return response()->json(['message' => 'Transaction approved', 'amount' => $amount]);
                return redirect()->route('main');
                if ($callback->isCanceledTransaction()) {
                }
                $reservation->is_paid = false;
                $reservation->save();
                return redirect()->route('main');
            }
        } catch (\Exception $e) {
            $exception = $e->getMessage();
            return redirect()->route('main');
        }
    }
}
