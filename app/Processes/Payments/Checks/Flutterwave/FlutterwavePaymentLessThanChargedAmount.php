<?php

declare(strict_types=1);

namespace App\Processes\Payments\Checks\Flutterwave;

use Closure;
use App\Contracts\DataObject;
use App\Contracts\Processes\Check;

final class FlutterwavePaymentLessThanChargedAmount implements Check
{
    public function __invoke(DataObject $payload, Closure $next)
    {
        if (\Money::toSubUnit($payload->data()->paymentVerification->charged_amount) < $payload->data()->payment->amount) {
            $payload->data()->payment->update([
              'charged_amount' => \Money::toSubUnit($payload->data()->paymentVerification->charged_amount),
              'status' => \App\Enums\PaymentStatus::INCOMPLETE->value
            ]);
        }

        return $next($payload);
    }
}
