<?php

declare(strict_types=1);

namespace App\Contracts;

interface ValueObject
{
    public function toArray();
}
