<?php

declare(strict_types=1);

namespace App\Concerns\Payments;

trait CardToken
{
    public function exists(string $token): bool
    {
        return null !== \App\Models\Card::query()->whereTokenHash($this->hash($token))->first();
    }

    public function hash(string $token)
    {
        return hash_hmac('sha256', $token, config('app.key'));
    }
}
