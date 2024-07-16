<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\Models\Fundraiser;
use Plutu\Services\PlutuSadad;
use Plutu\Services\PlutuAdfali;
use App\Models\Payment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PaymentController extends Controller
{
    public function index(Fundraiser $fundraiser)
    {
        return view('user.payments.index', compact('fundraiser'));
    }

    public function viewSadad(Fundraiser $fundraiser)
    {
        return view('user.payments.init.sadad', compact('fundraiser'));
    }

    public function viewAdfali(Fundraiser $fundraiser)
    {
        return view('user.payments.init.adfali', compact('fundraiser'));
    }

    public function initPayment(Request $request)
    {
        $user_id = Auth::user()->id;
        $fundraiser_id = $request->input('fundraiser_id');
        $payment_method = $request->input('payment_method');

        if ($payment_method == 'sadad') {
            // SADAD payment initialization
            $mobileNumber = $request->input('mobile_number');
            $birthYear = $request->input('birth_year');
            $amount = $request->input('amount');

            try {
                $api = new PlutuSadad;
                $apiResponse = $api->verify($mobileNumber, $birthYear, $amount);

                if ($apiResponse->getOriginalResponse()->isSuccessful()) {
                    $processId = $apiResponse->getProcessId();
                    $statusCode = $apiResponse->getOriginalResponse()->getStatusCode();

                    return redirect()->route('payments.confirm.sadad', compact('user_id', 'fundraiser_id', 'processId', 'amount', 'statusCode'));
                } elseif ($apiResponse->getOriginalResponse()->hasError()) {
                    $responseData = $apiResponse->getOriginalResponse()->getBody();
                    dd($responseData);
                }
            } catch (\Exception $e) {
                $exception = $e->getMessage();
            }
        } elseif ($payment_method == 'adfali') {
            // ADFALI payment initialization
            $mobileNumber = $request->input('mobile_number');
            $amount = $request->input('amount');

            try {
                $api = new PlutuAdfali;
                $apiResponse = $api->verify($mobileNumber, $amount);

                if ($apiResponse->getOriginalResponse()->isSuccessful()) {
                    $processId = $apiResponse->getProcessId();
                    $statusCode = $apiResponse->getOriginalResponse()->getStatusCode();

                    return redirect()->route('payments.confirm.adfali', compact('user_id', 'fundraiser_id', 'processId', 'amount', 'statusCode'));
                } elseif ($apiResponse->getOriginalResponse()->hasError()) {
                    $responseData = $apiResponse->getOriginalResponse()->getBody();
                    dd($responseData);
                }
            } catch (\Exception $e) {
                $exception = $e->getMessage();
            }
        }
    }

    public function confirmSadad(Request $request)
    {
        $user_id = $request->query('user_id');
        $fundraiser_id = $request->query('fundraiser_id');
        $processId = $request->query('processId');
        $amount = $request->query('amount');
        $statusCode = $request->query('statusCode');

        return view('user.payments.confirm.sadad', compact('user_id', 'fundraiser_id', 'processId', 'amount', 'statusCode'));
    }

    public function confirmAdfali(Request $request)
    {
        $user_id = $request->query('user_id');
        $fundraiser_id = $request->query('fundraiser_id');
        $processId = $request->query('processId');
        $amount = $request->query('amount');
        $statusCode = $request->query('statusCode');

        return view('user.payments.confirm.adfali', compact('user_id', 'fundraiser_id', 'processId', 'amount', 'statusCode'));
    }

    public function confirmPayment(Request $request)
    {
        $user_id = $request->input('user_id');
        $fundraiser_id = $request->input('fundraiser_id');
        $payment_method = $request->input('payment_method');

        if ($payment_method == 'sadad') {
            // SADAD payment confirmation
            $processId = $request->input('processId');
            $code = $request->input('code');
            $amount = $request->input('amount');
            $invoiceNo = '123123';

            try {
                $api = new PlutuSadad;
                $apiResponse = $api->confirm($processId, $code, $amount, $invoiceNo);

                if ($apiResponse->getOriginalResponse()->isSuccessful()) {
                    $transactionId = $apiResponse->getTransactionId();
                    $data = $apiResponse->getOriginalResponse()->getBody();

                    $payment = Payment::create([
                        'user_id' => $user_id,
                        'fundraiser_id' => $fundraiser_id,
                        'transactionId' => $transactionId,
                        'payment_method' => 'Sadad',
                        'amount' => $amount,
                    ]);

                    return redirect()->route('payments.store', compact('payment'));
                } elseif ($apiResponse->getOriginalResponse()->hasError()) {
                    $responseData = $apiResponse->getOriginalResponse()->getBody();
                    dd($responseData);
                }
            } catch (\Exception $e) {
                $exception = $e->getMessage();
            }
        } elseif ($payment_method == 'adfali') {
            // ADFALI payment confirmation
            $processId = $request->input('processId');
            $code = $request->input('code');
            $amount = $request->input('amount');
            $invoiceNo = 'inv-12345';

            try {
                $api = new PlutuAdfali;
                $apiResponse = $api->confirm($processId, $code, $amount, $invoiceNo);

                if ($apiResponse->getOriginalResponse()->isSuccessful()) {
                    $transactionId = $apiResponse->getTransactionId();
                    $data = $apiResponse->getOriginalResponse()->getBody();

                    $payment = Payment::create([
                        'user_id' => $user_id,
                        'fundraiser_id' => $fundraiser_id,
                        'transactionId' => $transactionId,
                        'payment_method' => 'Adfali',
                        'amount' => $amount,
                    ]);

                    return redirect()->route('payments.store', compact('payment'));
                } elseif ($apiResponse->getOriginalResponse()->hasError()) {
                    $responseData = $apiResponse->getOriginalResponse()->getBody();
                    dd($responseData);
                }
            } catch (\Exception $e) {
                $exception = $e->getMessage();
            }
        }
    }

    public function store(Request $request)
    {
        $payment = Payment::create($request->all());
        return redirect()->route('fundraisers.show', $payment->fundraiser_id);
    }
}
