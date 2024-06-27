<?php

declare(strict_types=1);

namespace App\Services\Processes;

use App\Contracts\Processes\Process;

final class ResolveVerificationProcess
{
    public function __construct(private readonly string $gateway)
    {
    }

    public function __invoke(): Process
    {
        return match ($this->gateway) {
            'paystack' => new \App\Processes\Payments\Process\PaystackVerification(),
            'kriptup' => new \App\Processes\Payments\Process\KriptupVerification(),
            'flutterwave' => new \App\Processes\Payments\Process\FlutterwaveVerification(),
            'monnify' => new \App\Processes\Payments\Process\MonnifyVerification()
        };
    }
}
