<?php

declare(strict_types=1);

namespace App\Processes\Payments\Checks;

use Closure;
use App\Contracts\DataObject;
use App\Contracts\Processes\Check;
use App\Exceptions\InvalidPaymentException;

final class AvailablePayment implements Check
{
    public function __invoke(DataObject $payload, Closure $next)
    {
        if ($payload->data()->payment === null) {
            throw new InvalidPaymentException('Payment not found');
        }

        return $next($payload);
    }
}
