<?php

declare(strict_types=1);

namespace App\Services\Payments\Gateways;

use App\Contracts\Payments\Gateway;
use Illuminate\Http\Client\Response;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Cache;
use App\Concerns\Payments\ConvertsMoney;
use Illuminate\Http\Client\RequestException;

final class MonnifyService implements Gateway
{
    use ConvertsMoney;

    public string $name = 'monnify';

    public function __construct(
        private string $api_key,
        private string $secret_key,
        private string $auth_endpoint,
        private string $token_name,
        private string $token_expiry,
        private string $initialize_endpoint,
        private string $currency,
        private string $verify_endpoint,
        private string $contract_code,
        private string $reserved_account_endpoint,
    ) {
    }

    public function authorize(): void
    {
        Cache::remember($this->token_name, $this->token_expiry, function () {
            $response = Http::monnify()
                ->withBasicAuth($this->api_key, $this->secret_key)
                ->post($this->auth_endpoint, [])
                ->throw(function (Response $response, RequestException $execption) {
                    throw new \App\Exceptions\PaymentGatewayException($execption->getMessage());
                });

            $payload = json_decode($response->body(), false);
            return $payload->responseBody->accessToken;
        });
    }

    public function charge($fullname, $email, $reference, $amount, $redirect_url, $currency = null): string
    {
        $this->authorize();
        $response = Http::monnify()
            ->withToken(Cache::get($this->token_name))
            ->post($this->initialize_endpoint, [
            'amount' => \Money::toUnit($amount),
            'customerName' => $fullname,
            'customerEmail' => $email,
            'currencyCode' => $currrency ?? $this->currency,
            'contractCode' => $this->contract_code,
            'paymentReference' => $reference,
            'redirectUrl' => $redirect_url,
            'paymentMethods' => [
                'CARD',
                'ACCOUNT_TRANSFER'
              ],
        ])
        ->throw(function (Response $response, RequestException $execption) {
            throw new \App\Exceptions\PaymentGatewayException($execption->getMessage());
        });
        $payload = json_decode($response->body(), false);
        return $payload->responseBody->checkoutUrl;
    }

    public function verify(string $transaction_reference)
    {
        $this->authorize();
        $response = Http::monnify()
            ->withToken(Cache::get($this->token_name))
            ->get($this->verify_endpoint . urlencode($transaction_reference))
            ->throw(function (Response $response, RequestException $exception) {
                throw new \App\Exceptions\PaymentGatewayException($exception->getMessage());
            });

        return $response->body();
    }

    public function createVirtualAccount(string $email, string $phone_number, string $first_name, string $last_name, ?string $bvn = null, ?string $transaction_reference = null, ?string $narration = null)
    {
    }
}
