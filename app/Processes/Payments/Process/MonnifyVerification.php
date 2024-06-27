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
use App\Processes\Payments\Checks\Monnify\MonnifyStoreCardDetails;
use App\Processes\Payments\Checks\Monnify\MonnifySuccessfulPayment;
use App\Processes\Payments\Checks\Monnify\MonnifyPaymentAtLeastChargedAmount;
use App\Processes\Payments\Checks\Monnify\MonnifyPaymentLessThanChargedAmount;

final class MonnifyVerification implements Process
{
    /*
        *@var array $<int, Check>
     */
    private array $checks = [
        MonnifySuccessfulPayment::class,
        AvailablePayment::class,
        ExpectedCurrency::class,
        PaymentMade::class,
        MonnifyPaymentAtLeastChargedAmount::class,
        MonnifyPaymentLessThanChargedAmount::class,
        MonnifyStoreCardDetails::class,
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
