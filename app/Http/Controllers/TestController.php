<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Contracts\Payments\Gateway;
use App\Contracts\Payments\TransactionReference;

class TestController
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request, Gateway $gateway, TransactionReference $reference)
    {
        try {
            DB::beginTransaction();

            $user = \App\Models\User::query()->find(15);
            $payment = \App\Models\Payment::create([
                'user_id' => $user->id,
                'gateway' => $gateway->name,
                'amount' => \Money::toSubUnit(21700),
                'transaction_reference' => $reference->generate('K'),
                'currency' => 'NGN'
            ]);

            $paymentLink = $gateway->charge(
                fullname: $user->full_name,
                email: $user->email,
                reference: $payment->transaction_reference,
                amount: $payment->amount,
                currency: 'NGN',
                redirect_url: 'https://google.com'
            );

            DB::commit();
            return $paymentLink;
        } catch(\Exception $exception) {
            DB::rollback();
            return $exception;
        }
    }
}
