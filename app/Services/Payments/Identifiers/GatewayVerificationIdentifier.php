<?php

declare(strict_types=1);

namespace App\Services\Payments\Identifiers;

use App\Models\Payment;

final class GatewayVerificationIdentifier
{
    public function __invoke(Payment $payment)
    {
        return match ($payment->gateway) {
            'flutterwave' => $payment->transaction_reference,
            'kriptup' => $payment->transaction_reference,
            'monnify' => $payment->gateway_transaction_identifier,
            'paystack' => $payment->transaction_reference,
        };
    }
}
