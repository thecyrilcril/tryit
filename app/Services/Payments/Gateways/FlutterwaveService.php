<?php

declare(strict_types=1);

namespace App\Services\Payments\Gateways;

use App\Contracts\Payments\Gateway;
use Illuminate\Http\Client\Response;
use Illuminate\Support\Facades\Http;
use App\Concerns\Payments\ConvertsMoney;
use Illuminate\Http\Client\PendingRequest;
use Illuminate\Http\Client\RequestException;

final class FlutterwaveService implements Gateway
{
    use ConvertsMoney;

    public string $name = 'flutterwave';

    public function __construct(
        private string $standard_endpoint,
        private string $verify_endpoint,
        private string $virtual_account_endpoint,
    ) {
    }

    public function authorize(): PendingRequest
    {
        return Http::flutterwave();
    }

    public function charge($fullname, $email, $reference, $amount, $redirect_url, $currency = null): string
    {
        $response = $this->authorize()
            ->post($this->standard_endpoint, [
                'customer' => [
                  'email' => $email,
                  'name' => $fullname,
                ],
                'tx_ref' => $reference,
                'amount' => \Money::toUnit($amount),
                'currency' => $currency ?? config('flutterwave.currency'),
                'redirect_url' => $redirect_url,
            ])
            ->throw(function (Response $response, RequestException $exception) {
                throw new \App\Exceptions\PaymentGatewayException($exception->getMessage());
            });

        $payload = json_decode($response->body(), false);
        return $payload->data->link;
    }

    public function createVirtualAccount(string $email, string $phone_number, string $first_name, string $last_name, ?string $bvn = null, ?string $transaction_reference = null, ?string $narration = null)
    {
        $response = Http::flutterwave()
            ->post($this->virtual_account_endpoint, [
                'email' => $email,
                'is_permanent' => true,
                'bvn' => $bvn,
                'tx_ref' => $transaction_reference,
                'phonenumber' => $phone_number,
                'firstname' => $first_name,
                'lastname' => $last_name,
                'narration' => $narration
            ])
            ->throw(function (Response $response, RequestException $exception) {
                throw new \App\Exceptions\NubanAccountCreationException($exception->getMessage());
            });

        return $response->body();
    }

    public function verify(string $transaction_reference)
    {
        $response = $this->authorize()
            ->get($this->verify_endpoint, [
              'tx_ref' => $transaction_reference
            ])
            ->throw(function (Response $response, RequestException $exception) {
                throw new \App\Exceptions\PaymentGatewayException($exception->getMessage());
            });

        return $response->body();
    }
}
