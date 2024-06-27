<?php

declare(strict_types=1);

namespace App\Services\Payments\Gateways;

use App\Contracts\Payments\Gateway;
use Illuminate\Http\Client\Response;
use Illuminate\Support\Facades\Http;
use App\Concerns\Payments\ConvertsMoney;
use Illuminate\Http\Client\PendingRequest;
use Illuminate\Http\Client\RequestException;

final class PaystackService implements Gateway
{
    use ConvertsMoney;

    public string $name = 'paystack';

    public function __construct(
        private string $initialize_endpoint,
        private string $verify_endpoint,
        private string $dedicted_account_assign_endpoint,
        private string $dedicted_account_requery_endpoint,
        private string $dedicted_account_provider_bank_slug,
    ) {
    }

    public function authorize(): PendingRequest
    {
        return Http::paystack();
    }

    public function charge($fullname, $email, $reference, $amount, $redirect_url, $currency = null): string
    {
        $response = $this->authorize()
            ->post($this->initialize_endpoint, [
                'email' => $email,
                'reference' => $reference,
                'amount' => $amount,
                'currency' => $currency ?? config('paystack.currency'),
                'callback_url' => $redirect_url,
          ])
        ->throw(function (Response $response, RequestException $exception) {
            throw new \App\Exceptions\PaymentGatewayException($exception->getMessage());
        });

        $payload = json_decode($response->body(), false);
        return $payload->data->authorization_url;
    }

    public function createVirtualAccount($email, $phone_number, $first_name, $last_name, ?string $bvn = null, ?string $transaction_reference = null, ?string $narration = null)
    {
        $response = Http::paystack()
            ->post($this->dedicted_account_assign_endpoint, [
                'email' => $email,
                'first_name' => $first_name,
                'last_name' => $last_name,
                'phone' => $phone_number,
                'preferred_bank' => $this->dedicted_account_provider_bank_slug,
                'country' => 'NG'
                // 'bvn' => $bvn,
            ])
            ->throw(function (Response $response, RequestException $exception) {
                throw new \App\Exceptions\NubanAccountCreationException($exception->getMessage());
            });

        return $response->body();
    }

    public function requeryVirtualAccount(string $accountNumber)
    {
        $response = Http::paystack()
            ->get($this->dedicted_account_requery_endpoint, [
                'account_number' => $accountNumber,
                'provider_slug' => $this->dedicted_account_provider_bank_slug
            ])
            ->throw(function (Response $response, RequestException $exception) {
                throw new \App\Exceptions\NubanAccountCreationException($exception->getMessage());
            });

        return $response->body();
    }

    public function verify(string $transaction_reference)
    {
        $response = $this->authorize()
            ->get($this->verify_endpoint . $transaction_reference)
            ->throw(function (Response $response, RequestException $exception) {
                throw new \App\Exceptions\PaymentGatewayException($exception->getMessage());
            });

        return $response->body();
    }
}
