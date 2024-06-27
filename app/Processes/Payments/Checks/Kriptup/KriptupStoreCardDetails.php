<?php

declare(strict_types=1);

namespace App\Processes\Payments\Checks\Kriptup;

use Closure;
use Illuminate\Support\Str;
use App\Contracts\DataObject;
use App\Contracts\Processes\Check;

final class KriptupStoreCardDetails implements Check
{
    public function __invoke(DataObject $payload, Closure $next)
    {
        if (Str::contains($payload->data()->paymentVerification->payment_type, 'card')) {
            logger('Kriptup transaction ref:' . $payload->data()->paymentVerification->ref . ' was a card payment');
        }

        return $next($payload);
    }
}
