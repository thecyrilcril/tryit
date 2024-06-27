<?php

declare(strict_types=1);

namespace App\Contracts\Payments;

interface TransactionReference
{
    public function generate(): string;
}
