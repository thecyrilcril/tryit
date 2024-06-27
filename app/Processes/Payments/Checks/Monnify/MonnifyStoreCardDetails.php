<?php

declare(strict_types=1);

namespace App\Processes\Payments\Checks\Monnify;

use Closure;
use App\Contracts\DataObject;
use App\Contracts\Processes\Check;
use App\Concerns\Payments\CardToken;
use App\ValueObjects\Payments\CardObject;

final class MonnifyStoreCardDetails implements Check
{
    use CardToken;

    public function __invoke(DataObject $payload, Closure $next)
    {
        if (
            $payload->data()->paymentVerification->paymentMethod === 'CARD' &&
            $payload->data()->paymentVerification->cardDetails != null
        ) {
            $card = new CardObject(
                tokenizing_gateway: $payload->data()->payment->gateway,
                email: $payload->data()->paymentVerification->customer->email,
                token: $payload->data()->paymentVerification->cardDetails->cardToken ?? md5('token'),
                bin: $payload->data()->paymentVerification->cardDetails->bin,
                last4digits: $payload->data()->paymentVerification->cardDetails->last4,
                type: $payload->data()->paymentVerification->cardDetails->cardType,
                exp_month: $payload->data()->paymentVerification->cardDetails->expMonth,
                exp_year: $payload->data()->paymentVerification->cardDetails->expYear,
            );

            if (!$this->exists($payload->data()->paymentVerification->cardDetails->cardToken ?? md5('token'))) {
                $payload->data()->payment->user->cards()->create($card->toArray());
            }

            return $next($payload);
        }
    }
}
