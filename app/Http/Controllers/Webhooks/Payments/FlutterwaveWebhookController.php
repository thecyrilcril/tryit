<?php

declare(strict_types=1);

namespace App\Http\Controllers\Webhooks\Payments;

use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use App\Services\WebhookEvents\Flutterwave\FlutterwaveChargeSuccess;

final class FlutterwaveWebhookController
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
                'charge.completed' => (new FlutterwaveChargeSuccess($payload))(),
            };



        } catch(\Exception $exception) {
            logger($exception);
            return new JsonResponse([], Response::HTTP_BAD_REQUEST);
        }
    }

    private function validSignature(Request $request): bool
    {
        if (! $request->hasHeader('verif-hash')) {
            return false;
        }

        return ($request->header('verif-hash') === config('flutterwave.webhook_secret_hash'));
    }
}
