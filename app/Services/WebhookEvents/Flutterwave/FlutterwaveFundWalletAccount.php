<?php

declare(strict_types=1);

namespace App\Services\WebhookEvents\Flutterwave;

use App\Contracts\Payments\Wallet;
use App\ValueObjects\Wallets\FlutterwaveWalletTransactionReference;

final class FlutterwaveFundWalletAccount
{
    protected $gateway = 'flutterwave';

    public function __construct(private readonly Wallet $wallet)
    {
    }

    public function __invoke(object $payload)
    {
        try {

            return $this->wallet
                ->fund(
                    amount: \Money::toSubUnit($payload->data->amount),
                    fees: \Money::toSubUnit($payload->data->app_fee),
                    gateway: $this->gateway,
                    tx_ref: ( new FlutterwaveWalletTransactionReference($payload->data->tx_ref) )->tx_ref,
                );
        } catch(\Exception $exception) {
            logger($exception);
        }
    }
}
