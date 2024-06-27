<?php

declare(strict_types=1);

namespace App\DataObjects\Payments;

use App\Models\Payment;
use App\Contracts\DataObject;

final class Verification implements DataObject
{
    public function __construct(
        public readonly Payment $payment,
        public readonly object $paymentVerificationData,
    ) {
    }

    public function data(): object
    {
        return (object) [
            'payment' => $this->payment,
            'paymentVerification' => $this->paymentVerificationData,
        ];
    }
}
