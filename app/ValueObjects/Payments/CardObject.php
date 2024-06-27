<?php

declare(strict_types=1);

namespace App\ValueObjects\Payments;

use App\Contracts\ValueObject;
use App\Concerns\Payments\CardToken;

class CardObject implements ValueObject
{
    use CardToken;

    public function __construct(
        public readonly string $tokenizing_gateway,
        public readonly string $email,
        public readonly string $token,
        public readonly string $bin,
        public readonly string $last4digits,
        public readonly string $type,
        public readonly ?string $expiry = null,
        public readonly ?string $exp_month = null,
        public readonly ?string $exp_year = null,
        public readonly ?string $paystack_signature = null,
    ) {
    }

    public function toArray()
    {
        return [
            'tokenizing_gateway' => $this->tokenizing_gateway,
            'email' => $this->email,
            'token' => $this->token,
            'token_hash' => $this->hash($this->token),
            'bin' => $this->bin,
            'last4digits' => $this->last4digits,
            'type' => $this->getType(),
            'expiry' => $this->getExpiry(),
            'paystack_signature' => $this->paystack_signature,
        ];
    }

    private function getExpiry()
    {
        if (!$this->expiry && ($this->exp_month && $this->exp_year)) {
            $year = match (strlen($this->exp_year)) {
                2 => $this->exp_year,
                4 => substr($this->exp_year, 2),
            };

            return $this->exp_month . '/' . $year;
        }

        return $this->expiry;
    }

    private function getType()
    {
        return strtoupper(trim($this->type));
    }
}
