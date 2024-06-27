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
use App\Processes\Payments\Checks\Paystack\PaystackStoreCardDetails;
use App\Processes\Payments\Checks\Paystack\PaystackSuccessfulPayment;
use App\Processes\Payments\Checks\Paystack\PaystackPaymentAtLeastChargedAmount;
use App\Processes\Payments\Checks\Paystack\PaystackPaymentLessThanChargedAmount;

final class PaystackVerification implements Process
{
    /*
        *@var array $<int, Check>
     */
    private array $checks = [
        PaystackSuccessfulPayment::class,
        AvailablePayment::class,
        ExpectedCurrency::class,
        PaymentMade::class,
        PaystackPaymentAtLeastChargedAmount::class,
        PaystackPaymentLessThanChargedAmount::class,
        PaystackStoreCardDetails::class,
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
