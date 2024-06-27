<?php

declare(strict_types=1);

namespace App\Processes\Payments\Checks\Paystack;

use Closure;
use App\Contracts\DataObject;
use App\Contracts\Processes\Check;

final class PaystackPaymentAtLeastChargedAmount implements Check
{
    public function __invoke(DataObject $payload, Closure $next)
    {
        if ($payload->data()->paymentVerification->amount >= $payload->data()->payment->amount) {
            $payload->data()->payment->update([
              'charged_amount' => $payload->data()->paymentVerification->amount,
              'status' => \App\Enums\PaymentStatus::PAID->value
            ]);
        }

        return $next($payload);
    }
}
