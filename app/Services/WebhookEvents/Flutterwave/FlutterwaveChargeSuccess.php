<?php

declare(strict_types=1);

namespace App\Services\WebhookEvents\Flutterwave;

use App\Models\Payment;
use App\Enums\PaymentStatus;
use App\Events\PaymentRecieved;
use Illuminate\Http\JsonResponse;
use App\Contracts\Payments\Wallet;
use Symfony\Component\HttpFoundation\Response;
use App\Exceptions\Payments\PaymentNotFoundException;

final class FlutterwaveChargeSuccess
{
    public function __construct(private readonly object $payload)
    {
    }

    public function __invoke()
    {
        if (! $this->successfulTransaction($this->payload->data->status)) {
            return ;
        }


        if ($this->payload->data->payment_type === 'bank_transfer') {
            $walletService = resolve(Wallet::class);
            return ( new FlutterwaveFundWalletAccount($walletService))($this->payload);
        }

        $payment = $this->fetchAssociatedPayment($this->payload->data->tx_ref);

        if ($this->isCompleted($payment)) {
            return new JsonResponse([], Response::HTTP_OK);
        }

        $payment->update([
            'gateway_transaction_identifier' => $this->payload->data->id
        ]);

        // fire off events
        PaymentRecieved::dispatch($payment);

        return new JsonResponse([], Response::HTTP_OK);
    }

    private function successfulTransaction($status): bool
    {
        return  $status === "successful";
    }

    private function fetchAssociatedPayment($transaction_reference): Payment
    {
        if (null !== $payment = \App\Models\Payment::query()->where('transaction_reference', $transaction_reference)->first()) {
            return $payment;
        }

        throw new PaymentNotFoundException('payment could not be retrieved');
    }

    private function isCompleted(Payment $payment): bool
    {
        return in_array($payment->status->value, [ PaymentStatus::PAID->value, PaymentStatus::INCOMPLETE->value ], true);
    }
}
