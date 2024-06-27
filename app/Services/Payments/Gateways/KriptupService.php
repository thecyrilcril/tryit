<?php

declare(strict_types=1);

namespace App\Services\Payments\Gateways;

use App\Contracts\Payments\Gateway;
use Illuminate\Http\Client\Response;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Cache;
use App\Concerns\Payments\ConvertsMoney;
use Illuminate\Http\Client\RequestException;

final class KriptupService implements Gateway
{
    use ConvertsMoney;

    public string $name = 'kriptup';

    public function __construct(
        private string $key,
        private string $secret,
        private string $auth_endpoint,
        private string $token_name,
        private string $token_expiry,
        private string $checkout_endpoint,
        private string $currency,
        private string $flux_id,
        private string $payment_type,
        private string $fee_bearer,
        private string $verify_endpoint,
    ) {
    }

    public function authorize(): void
    {
        Cache::remember($this->token_name, $this->token_expiry, function () {
            $response = Http::kriptup()
                ->withBasicAuth($this->key, $this->secret)
                ->post($this->auth_endpoint, [])
                ->throw(function (Response $response, RequestException $exception) {
                    throw new \App\Exceptions\PaymentGatewayException($exception->getMessage());
                });

            $payload = json_decode($response->body(), false);
            return $payload->token;
        });
    }

    public function charge($fullname, $email, $reference, $amount, $redirect_url, $currency = null): string
    {
        $this->authorize();
        $response = Http::kriptup()
            ->withToken(Cache::get($this->token_name))
            ->post($this->checkout_endpoint, [
                'amount' => $amount,
                'currency' => $currency ?? $this->currency,
                'payment_ref' => $reference,
                'flux_id' => $this->flux_id,
                'buyer_email' => $email,
                'buyer_name' => $fullname,
                'payment_type' => $this->payment_type,
                'fee_bearer' => $this->fee_bearer,
                'redirect_url' => $redirect_url,
            ])
            ->throw(function (Response $response, RequestException $exception) {
                throw new \App\Exceptions\PaymentGatewayException($exception->getMessage());
            });
        $payload = json_decode($response->body(), false);
        return $payload->link;
    }

    public function createVirtualAccount(string $email, string $phone_number, string $first_name, string $last_name, ?string $bvn = null, ?string $transaction_reference = null, ?string $narration = null)
    {
    }

    public function verify(string $transaction_reference)
    {
        $this->authorize();
        $response = Http::kriptup()
            ->withToken(Cache::get($this->token_name))
            ->get($this->verify_endpoint . $transaction_reference);
        return $response->body();
    }
}
