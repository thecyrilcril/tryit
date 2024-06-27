<?php

declare(strict_types=1);

namespace App\Services\WebhookEvents\Paystack;

use App\Contracts\Payments\Wallet;

final class PaystackFundWalletAccount
{
    protected $gateway = 'paystack';

    public function __construct(private readonly Wallet $wallet)
    {
    }

    public function __invoke(object $payload)
    {
        try {
            return $this->wallet
                ->fund(
                    amount: $payload->data->amount,
                    fees: $payload->data->fees,
                    gateway: $this->gateway,
                    account_number: $payload->data->authorization->receiver_bank_account_number,
                    bank_name: $payload->data->authorization->receiver_bank
                );
        } catch(\Exception $exception) {
            logger($exception);
        }
    }
}
