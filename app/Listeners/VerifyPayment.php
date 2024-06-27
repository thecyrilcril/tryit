<?php

declare(strict_types=1);

namespace App\Listeners;

use App\Events\PaymentRecieved;
use Illuminate\Support\Facades\App;
use App\Services\Processes\ResolveVerificationProcess;
use App\Services\Payments\Identifiers\GatewayVerificationIdentifier;

final class VerifyPayment
{
    /**
     * Create the event listener.
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     */
    public function handle(PaymentRecieved $event): void
    {
        $gateway = App::make($event->payment->gateway);

        $identifier = ( new GatewayVerificationIdentifier() )($event->payment);

        $payload = $gateway->verify($identifier);

        $responseObject = json_decode($payload, false);

        $paymentVerification = match ($event->payment->gateway) {
            'flutterwave' => $responseObject->data,
            'monnify' => $responseObject->responseBody,
            'paystack' => $responseObject->data,
            'kriptup' => $responseObject,
        };

        $process = ( new ResolveVerificationProcess($event->payment->gateway) )();


        $process->handle(
            payload: new \App\DataObjects\Payments\Verification(
                payment: $event->payment,
                paymentVerificationData: $paymentVerification
            )
        );
    }
}
