<?php

declare(strict_types=1);

namespace App\Enums;

enum WalletActivityType: string
{
    case CREDIT = 'credit';
    case DEBIT = 'debit';
}
