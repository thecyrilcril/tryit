<?php

declare(strict_types=1);

namespace App\Facades\Money;

use App\Contracts\Facades\Money as MoneyContract;
use Illuminate\Support\Facades\Facade;

class MoneyFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return MoneyContract::class;
    }
}
