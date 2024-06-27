<?php

declare(strict_types=1);

namespace App\Processes\Payments\Checks\Paystack;

use Closure;
use App\Contracts\DataObject;
use App\Contracts\Processes\Check;
use App\ValueObjects\Payments\CardObject;

final class PaystackStoreCardDetails implements Check
{
    public function __invoke(DataObject $payload, Closure $next)
    {
        if (
            $payload->data()->paymentVerification->channel === 'card' &&
            $payload->data()->paymentVerification->authorization != null
        ) {
            $card = new CardObject(
                tokenizing_gateway: $payload->data()->payment->gateway,
                email: $payload->data()->paymentVerification->customer->email,
                token: $payload->data()->paymentVerification->authorization->authorization_code,
                bin: $payload->data()->paymentVerification->authorization->bin,
                last4digits: $payload->data()->paymentVerification->authorization->last4,
                type: $payload->data()->paymentVerification->authorization->card_type,
                exp_month: $payload->data()->paymentVerification->authorization->exp_month,
                exp_year: $payload->data()->paymentVerification->authorization->exp_year,
                paystack_signature: $payload->data()->paymentVerification->authorization->signature,
            );
            if (
                null === \App\Models\Card::query()->wherePaystackSignature($payload->data()->paymentVerification->authorization->signature)->first()
            ) {
                $payload->data()->payment->user->cards()->create($card->toArray());
            }
        }

        return $next($payload);
    }
}
