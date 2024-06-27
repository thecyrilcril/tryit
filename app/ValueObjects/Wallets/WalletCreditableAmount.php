<?php

declare(strict_types=1);

namespace App\ValueObjects\Wallets;

use App\Contracts\ValueObject;
use App\Exceptions\Payments\InvalidAmountException;

final class WalletCreditableAmount implements ValueObject
{
    public function __construct(public readonly int $amount)
    {
        if (gmp_sign($this->amount) === -1) {
            throw new InvalidAmountException('creditable amount cannot be negative');
        }
    }

    public function toArray()
    {
        return [
            'amount' => $this->amount
        ];
    }
}
