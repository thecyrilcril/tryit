<?php

declare(strict_types=1);

namespace App\Enums;

enum TransactionStatus: string
{
    case INITIATED = 'initiated';
    case COMPLETED = 'completed';
    case INCOMPLETE = 'incomplete';
}
