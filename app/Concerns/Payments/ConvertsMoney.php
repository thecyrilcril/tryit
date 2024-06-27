<?php

declare(strict_types=1);

namespace App\Concerns\Payments;

trait ConvertsMoney
{
    public function toUnit($amount): string
    {
        return bcdiv((string)$amount, (string) 100, 2);
    }

    public function toSubUnit($amount): int
    {
        return (int) bcmul((string)$amount, (string) 100);
    }
}
