<?php

declare(strict_types=1);

namespace App\Contracts\Payments;

use App\Models\User;

interface Wallet
{
    public function fund(int $amount, int $fees, string $gateway, ?string $account_number, ?string $bank_name, ?string $tx_ref);

    public function withdraw(string $amount, User $user);
}
