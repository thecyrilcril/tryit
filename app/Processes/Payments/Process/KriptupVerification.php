<?php

declare(strict_types=1);

namespace App\Processes\Payments\Process;

use App\Contracts\DataObject;
use App\Contracts\Processes\Check;
use App\Contracts\Processes\Process;
use Illuminate\Support\Facades\Pipeline;
use App\Processes\Payments\Checks\PaymentMade;
use App\Processes\Payments\Checks\ReturnResponse;
use App\Processes\Payments\Checks\AvailablePayment;
use App\Processes\Payments\Checks\ExpectedCurrency;
use App\Processes\Payments\Checks\Kriptup\KriptupStoreCardDetails;
use App\Processes\Payments\Checks\Kriptup\KriptupSuccessfulPayment;
use App\Processes\Payments\Checks\Kriptup\KriptupPaymentAtLeastChargedAmount;
use App\Processes\Payments\Checks\Kriptup\KriptupPaymentLessThanChargedAmount;

final class KriptupVerification implements Process
{
    /*
        *@var array $<int, Check>
     */
    private array $checks = [
        KriptupSuccessfulPayment::class,
        AvailablePayment::class,
        ExpectedCurrency::class,
        PaymentMade::class,
        KriptupPaymentAtLeastChargedAmount::class,
        KriptupPaymentLessThanChargedAmount::class,
        // KriptupStoreCardDetails::class,
        ReturnResponse::class
    ];

    public function handle(DataObject $payload): mixed
    {
        return Pipeline::send(
            passable: $payload
        )->through(
            pipes: $this->checks,
        )->thenReturn();
    }
}
