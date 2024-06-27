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
use App\Processes\Payments\Checks\Flutterwave\FlutterwaveStoreCardDetails;
use App\Processes\Payments\Checks\Flutterwave\FlutterwaveSuccessfulPayment;
use App\Processes\Payments\Checks\Flutterwave\FlutterwavePaymentAtLeastChargedAmount;
use App\Processes\Payments\Checks\Flutterwave\FlutterwavePaymentLessThanChargedAmount;

final class FlutterwaveVerification implements Process
{
    /*
        *@var array $<int, Check>
     */
    private array $checks = [
        FlutterwaveSuccessfulPayment::class,
        AvailablePayment::class,
        ExpectedCurrency::class,
        PaymentMade::class,
        FlutterwavePaymentAtLeastChargedAmount::class,
        FlutterwavePaymentLessThanChargedAmount::class,
        FlutterwaveStoreCardDetails::class,
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
