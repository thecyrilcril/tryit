<?php

declare(strict_types=1);

namespace App\Enums\Order;

enum Type: string
{
    case SALE = 'sale';
    case SUNSCRIPTION = 'subscription';
}
