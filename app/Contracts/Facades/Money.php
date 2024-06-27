<?php

declare(strict_types=1);

namespace App\Contracts\Facades;

interface Money
{
    public function toUnit($amount): string;

    public function toSubUnit($amount): int;
}
