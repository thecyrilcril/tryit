<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Models\Payment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use App\Services\Processes\ResolveVerificationProcess;

class VerifyController
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request, Payment $payment)
    {
        $gateway = App::make($payment->gateway);

        $payload = $gateway->verify($payment->transaction_reference);

        $responseObject = json_decode($payload, false);

        $paymentVerification = match ($payment->gateway) {
            'flutterwave' => $responseObject->data,
            'monnify' => $responseObject->responseBody,
            'paystack' => $responseObject->data,
            'kriptup' => $responseObject
        };


        $process = ( new ResolveVerificationProcess($payment->gateway) )();

        return $process->handle(
            payload: new \App\DataObjects\Payments\Verification(
                payment: $payment,
                paymentVerificationData: $paymentVerification
            )
        );
    }
}
