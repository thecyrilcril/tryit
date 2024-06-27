<?php

declare(strict_types=1);

namespace App\Processes\Payments\Checks\Kriptup;

use Closure;
use App\Contracts\DataObject;
use App\Contracts\Processes\Check;
use App\Exceptions\InvalidPaymentException;

final class KriptupSuccessfulPayment implements Check
{
    public function __invoke(DataObject $payload, Closure $next)
    {
        if (
            $payload->data()->paymentVerification === null ||
            !in_array($payload->data()->paymentVerification->status, ['PAID', 'INCOMPLETE'])
        ) {
            throw new InvalidPaymentException('Payment was not successful');
        }

        return $next($payload);
    }
}
