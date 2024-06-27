<?php

declare(strict_types=1);

namespace App\Http\Controllers\Webhooks\Payments;

use App\Models\Payment;
use Illuminate\Http\Request;
use App\Enums\PaymentStatus;
use App\Events\PaymentRecieved;
use Illuminate\Http\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use App\Exceptions\Payments\PaymentNotFoundException;

final class MonnifyWebhookController
{
    public function __invoke(Request $request)
    {
        try {
            if (! $this->validSignature($request)) {
                return ;
            }

            $payload = json_decode($request->getContent(), false);

            if (! $this->successfulTransaction($payload->eventType)) {
                return ;
            }

            $payment = $this->fetchAssociatedPayment($payload->eventData->paymentReference);

            if ($this->isCompleted($payment)) {
                return new JsonResponse([], Response::HTTP_OK);
            }

            $payment->update([
                'gateway_transaction_identifier' => $payload->eventData->transactionReference
            ]);

            // fire off events
            PaymentRecieved::dispatch($payment);

            return new JsonResponse([], Response::HTTP_OK);
        } catch(\Exception $exception) {
            logger($exception);
            return new JsonResponse([], Response::HTTP_BAD_REQUEST);
        }
    }

    private function validSignature(Request $request): bool
    {
        if (! $request->hasHeader('monnify-signature')) {
            return false;
        }

        return ($request->header('monnify-signature') === hash_hmac('sha512', $request->getContent(), config('monnify.secret_key')));
    }

    private function successfulTransaction($eventType): bool
    {
        return  $eventType === "SUCCESSFUL_TRANSACTION";
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
