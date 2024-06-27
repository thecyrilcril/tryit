<?php

declare(strict_types=1);

namespace App\Processes\Payments\Checks;

use Closure;
use App\Contracts\DataObject;
use App\Contracts\Processes\Check;
use App\Exceptions\InvalidPaymentException;

final class PaymentMade implements Check
{
    public function __invoke(DataObject $payload, Closure $next)
    {
        if (
            $payload->data()->payment->status->value === \App\Enums\PaymentStatus::PAID->value ||
            $payload->data()->payment->status->value === \App\Enums\PaymentStatus::INCOMPLETE->value
        ) {
            throw new InvalidPaymentException('Payment already made');
        }

        return $next($payload);
    }
}
