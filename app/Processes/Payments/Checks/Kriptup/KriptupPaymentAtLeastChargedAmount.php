<?php

declare(strict_types=1);

namespace App\Processes\Payments\Checks\Kriptup;

use Closure;
use App\Contracts\DataObject;
use App\Contracts\Processes\Check;

final class KriptupPaymentAtLeastChargedAmount implements Check
{
    public function __invoke(DataObject $payload, Closure $next)
    {
        if ($payload->data()->paymentVerification->paid_amount >= $payload->data()->payment->amount) {
            $payload->data()->payment->update([
              'charged_amount' => $payload->data()->paymentVerification->paid_amount,
              'status' => \App\Enums\PaymentStatus::PAID->value
            ]);
        }

        return $next($payload);
    }
}
