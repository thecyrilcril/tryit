<?php

declare(strict_types=1);

namespace App\Http\Controllers\Webhooks\Payments;

use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use App\Services\WebhookEvents\Paystack\PaystackChargeSuccess;
use App\Services\WebhookEvents\Paystack\PaystackAssignDedicatedAccount;

final class PaystackWebhookController
{
    public function __invoke(Request $request)
    {
        try {
            if (! $this->validSignature($request)) {
                return ;
            }
            logger($request->getContent());

            $payload = json_decode($request->getContent(), false);

            return match ($payload->event) {
                'charge.success' => (new PaystackChargeSuccess($payload))(),
                'dedicatedaccount.assign.success' => (new PaystackAssignDedicatedAccount($payload))(),
            };
        } catch(\Exception $exception) {
            logger($exception);
            return new JsonResponse([], Response::HTTP_BAD_REQUEST);
        }
    }

    private function validSignature(Request $request): bool
    {
        if (! $request->hasHeader('x-paystack-signature')) {
            return false;
        }

        return ($request->header('x-paystack-signature') === hash_hmac('sha512', $request->getContent(), config('paystack.secret_key')));
    }
}
