<?php

declare(strict_types=1);

namespace App\Http\Controllers\Webhooks\Payments;

use App\Models\Payment;
use App\Enums\PaymentStatus;
use Illuminate\Http\Request;
use App\Events\PaymentRecieved;
use Illuminate\Http\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Svix\Exception\WebhookVerificationException;
use App\Exceptions\Payments\PaymentNotFoundException;

final class KriptupWebhookController
{
    public function __invoke(Request $request)
    {
        try {
            $this->validSignature($request);

            $payload = json_decode($request->getContent(), false);

            if (! $this->successfulTransaction($payload->event)) {
                return ;
            }

            $payment = $this->fetchAssociatedPayment($payload->data->ref);

            if ($this->isCompleted($payment)) {
                return new JsonResponse([], Response::HTTP_OK);
            }

            $payment->update([
                'gateway_transaction_identifier' => $payload->id
            ]);

            // fire off events
            PaymentRecieved::dispatch($payment);

            return new JsonResponse([], Response::HTTP_OK);
        } catch(WebhookVerificationException $exception) {
            logger($exception);
            return;
        } catch(\Exception $exception) {
            logger($exception);
            return new JsonResponse([], Response::HTTP_BAD_REQUEST);
        }
    }

    private function validSignature(Request $request)
    {
        $headers = [
            'svix-id'  => $request->header('svix-id'),
            'svix-timestamp' => $request->header('svix-timestamp'),
            'svix-signature' => $request->header('svix-signature')
        ];
        $wh = new \Svix\Webhook(config('kriptup.signing_secret'));
        return $wh->verify($request->getContent(), $headers);
    }

    private function successfulTransaction($event): bool
    {
        return in_array($event, ['payment.charge.complete', 'payment.charge.incomplete']);
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
