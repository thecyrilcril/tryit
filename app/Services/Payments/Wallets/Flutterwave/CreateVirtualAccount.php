<?php

declare(strict_types=1);

namespace App\Services\Payments\Wallets\Flutterwave;

use App\Models\User;
use Illuminate\Support\Str;
use App\Contracts\Payments\Gateway;

final class CreateVirtualAccount
{
    public function __construct(
        private readonly User $user,
        private readonly object $payload,
        private readonly Gateway $gateway,
        private readonly string $transactionReference,
    ) {

    }

    public function __invoke()
    {
        if ($this->hasWallet($this->user)) {
            return;
        }

        $this->user->wallet()->create([
            'flutterwave_order_ref' => $this->payload->data->order_ref,
            'flutterwave_tx_ref' => $this->transactionReference,
            'bank_account_name' => Str::of($this->user->full_name)->append(' FLW'),
            'bank_account_number' => $this->payload->data->account_number,
            'bank_name' => $this->payload->data->bank_name,
            'gateway' => $this->gateway->name,
        ]);
    }

    private function hasWallet(User $user): bool
    {
        return null !== $user->wallet;
    }
}
