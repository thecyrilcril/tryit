<?php

declare(strict_types=1);

namespace App\Enums\Plan;

enum Status: string
{
    case ACTIVE = 'active';
    case INACTIVE = 'inactive';
}
