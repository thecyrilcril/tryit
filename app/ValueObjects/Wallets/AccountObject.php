<?php

declare(strict_types=1);

namespace App\ValueObjects\Wallets;

use App\Contracts\ValueObject;

final class AccountObject implements ValueObject
{
    public function __construct(
        public readonly string $bank_account_name,
        public readonly string $bank_account_number,
        public readonly string $bank_name,
        public readonly string $gateway
    ) {
    }

    public function toArray()
    {
        return [
            'bank_account_name' => $this->bank_account_name,
            'bank_account_number' => $this->bank_account_number,
            'bank_name' => $this->bank_name,
            'gateway' => $this->gateway
        ];
    }
}
