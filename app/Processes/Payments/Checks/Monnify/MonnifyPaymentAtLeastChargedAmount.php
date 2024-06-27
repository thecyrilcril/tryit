<?php

declare(strict_types=1);

namespace App\Processes\Payments\Checks\Monnify;

use Closure;
use App\Contracts\DataObject;
use App\Contracts\Processes\Check;

final class MonnifyPaymentAtLeastChargedAmount implements Check
{
    public function __invoke(DataObject $payload, Closure $next)
    {
        if (\Money::toSubUnit($payload->data()->paymentVerification->amountPaid) >= $payload->data()->payment->amount) {
            $payload->data()->payment->update([
              'charged_amount' => \Money::toSubUnit($payload->data()->paymentVerification->amountPaid),
              'status' => \App\Enums\PaymentStatus::PAID->value
            ]);
        }

        return $next($payload);
    }
}
