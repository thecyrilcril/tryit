<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contracts\Payments\Gateway;
use App\Contracts\Payments\TransactionReference;
use App\Services\Payments\Wallets\Flutterwave\CreateVirtualAccount;

class CreateVirtualAccountController
{
    public function __invoke(Request $request, Gateway $gateway, TransactionReference $reference)
    {
        $user = \App\Models\User::query()->find(3);

        $transactionReference = $reference->generate('VA');
        $response = $gateway->createVirtualAccount(
            email: $user->email,
            bvn: '22271488224',
            transaction_reference: $transactionReference,
            first_name: $user->first_name,
            last_name: $user->last_name,
            phone_number: '08100449016',
            narration: $user->full_name,
        );

        $payload = json_decode($response, false);

        if ($gateway->name === 'flutterwave') {
            ( new CreateVirtualAccount($user, $payload, $gateway, $transactionReference) )();

        }

        return $payload;
    }
}
