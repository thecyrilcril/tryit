<?php

declare(strict_types=1);

namespace App\Processes\Payments\Checks;

use Closure;
use App\Contracts\DataObject;
use App\Contracts\Processes\Check;
use App\Exceptions\InvalidPaymentException;

final class ExpectedCurrency implements Check
{
    public function __invoke(DataObject $payload, Closure $next)
    {
        if ($payload->data()->paymentVerification->currency !== $payload->data()->payment->currency) {
            throw new InvalidPaymentException('Currency do not match');
        }

        return $next($payload);
    }
}
