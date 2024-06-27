<?php

declare(strict_types=1);

namespace App\Facades\Money;

use App\Concerns\Payments\ConvertsMoney;
use App\Contracts\Facades\Money as MoneyContract;

final class Money implements MoneyContract
{
    use ConvertsMoney;
}
