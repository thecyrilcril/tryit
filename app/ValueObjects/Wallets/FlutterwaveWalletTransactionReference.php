<?php

declare(strict_types=1);

namespace App\ValueObjects\Wallets;

use Illuminate\Support\Str;
use App\Contracts\ValueObject;
use App\Exceptions\Payments\InvalidFlutterwaveWalletTransactionReferenceException;

final class FlutterwaveWalletTransactionReference implements ValueObject
{
    public function __construct(public readonly string $tx_ref)
    {
        if (Str::of($this->tx_ref)->startsWith('VA-') === false) {
            throw new InvalidFlutterwaveWalletTransactionReferenceException('Flutterwave Wallet Transaction Reference is Invalid');
        }
    }

    public function toArray()
    {
        return [
            'tx_ref' => $this->tx_ref
        ];
    }
}
