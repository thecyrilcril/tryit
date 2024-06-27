<?php

declare(strict_types=1);

namespace App\Contracts\Payments;

interface Gateway
{
    public function authorize();

    public function charge(
        string $fullname,
        string $email,
        string $reference,
        int|string $amount,
        string $redirect_url,
        string $currency
    ): string;

    public function verify(string $transaction_reference);

    public function createVirtualAccount(
        string $email,
        string $phone_number,
        string $first_name,
        string $last_name,
        ?string $bvn,
        ?string $transaction_reference,
        ?string $narration
    );
}
