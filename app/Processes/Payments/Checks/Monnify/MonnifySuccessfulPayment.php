<?php

declare(strict_types=1);

namespace App\Processes\Payments\Checks\Monnify;

use Closure;
use App\Contracts\DataObject;
use App\Contracts\Processes\Check;
use App\Exceptions\InvalidPaymentException;

final class MonnifySuccessfulPayment implements Check
{
    public function __invoke(DataObject $payload, Closure $next)
    {
        if (
            $payload->data()->paymentVerification === null ||
            !in_array($payload->data()->paymentVerification->paymentStatus, ['PAID', 'OVERPAID', 'PARTIALLY_PAID'])
        ) {
            throw new InvalidPaymentException('Payment was not successful');
        }

        return $next($payload);
    }
}
