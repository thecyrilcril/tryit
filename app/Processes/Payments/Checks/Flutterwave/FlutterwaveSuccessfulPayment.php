<?php

declare(strict_types=1);

namespace App\Processes\Payments\Checks\Flutterwave;

use Closure;
use App\Contracts\DataObject;
use App\Contracts\Processes\Check;
use App\Exceptions\InvalidPaymentException;

final class FlutterwaveSuccessfulPayment implements Check
{
    public function __invoke(DataObject $payload, Closure $next)
    {
        if ($payload->data()->paymentVerification === null || $payload->data()->paymentVerification->status !== 'successful') {
            throw new InvalidPaymentException('Payment was not successful');
        }

        return $next($payload);
    }
}
