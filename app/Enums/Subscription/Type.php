<?php

declare(strict_types=1);

namespace App\Enums\Subscription;

enum Type: string
{
    case ONETIME = 'onetime';
    case RECURRING = 'recurring';
}
