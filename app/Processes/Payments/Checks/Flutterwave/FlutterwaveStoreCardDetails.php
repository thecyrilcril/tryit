<?php

declare(strict_types=1);

namespace App\Processes\Payments\Checks\Flutterwave;

use Closure;
use App\Contracts\DataObject;
use App\Contracts\Processes\Check;
use App\Concerns\Payments\CardToken;
use App\ValueObjects\Payments\CardObject;

final class FlutterwaveStoreCardDetails implements Check
{
    use CardToken;

    public function __invoke(DataObject $payload, Closure $next)
    {
        if (
            $payload->data()->paymentVerification->payment_type === 'card' &&
            $payload->data()->paymentVerification->card !== null
        ) {
            $card = new CardObject(
                tokenizing_gateway: $payload->data()->payment->gateway,
                email: $payload->data()->paymentVerification->customer->email,
                token: $payload->data()->paymentVerification->card->token,
                bin: $payload->data()->paymentVerification->card->first_6digits,
                last4digits: $payload->data()->paymentVerification->card->last_4digits,
                type: $payload->data()->paymentVerification->card->type,
                expiry: $payload->data()->paymentVerification->card->expiry,
            );

            if (!$this->exists($payload->data()->paymentVerification->card->token)) {
                $payload->data()->payment->user->cards()->create($card->toArray());
            }
        }

        return $next($payload);
    }
}
