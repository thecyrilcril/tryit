<?php

declare(strict_types=1);

namespace App\Providers;

use App\Facades\Money\Money;
use App\Contracts\Payments\Wallet;
use App\Contracts\Payments\Gateway;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\ServiceProvider;
use App\Contracts\Payments\TransactionReference;
use App\Services\Payments\Wallets\WalletService;
use Illuminate\Contracts\Foundation\Application;
use App\Contracts\Facades\Money as MoneyContract;
use App\Services\Payments\Gateways\KriptupService;
use App\Services\Payments\Gateways\MonnifyService;
use App\Services\Payments\Gateways\PaystackService;
use App\Exceptions\Payments\InvalidGatewayException;
use App\Services\Payments\Gateways\FlutterwaveService;
use App\Services\Payments\Identifiers\TransactionReferenceService;

class PaymentServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        if (blank(config('payment.provider'))) {
            return;
        }
        $provider = match(config('payment.provider')) {
            'paystack' => PaystackService::class,
            'kriptup' => KriptupService::class,
            'flutterwave' => FlutterwaveService::class,
            'monnify' => MonnifyService::class,
            'default' => throw new InvalidGatewayException('Invalid Payment Gateway'),
        };

        $this->app->bind(Gateway::class, $provider);

        $this->app->singleton(TransactionReference::class, TransactionReferenceService::class);

        $this->app->singleton(MoneyContract::class, Money::class);

        $this->app->bind('flutterwave', FlutterwaveService::class);

        $this->app->bind('paystack', PaystackService::class);

        $this->app->bind('kriptup', KriptupService::class);

        $this->app->bind('monnify', MonnifyService::class);

        $this->app->singleton(Wallet::class, WalletService::class);

        $this->app->bind(FlutterwaveService::class, function (Application $app) {
            return new FlutterwaveService(
                config('flutterwave.standard_endpoint'),
                config('flutterwave.verify_endpoint'),
                config('flutterwave.virtual_account_endpoint')
            );
        });
        $this->app->bind(PaystackService::class, function (Application $app) {
            return new PaystackService(
                config('paystack.initialize_endpoint'),
                config('paystack.verify_endpoint'),
                config('paystack.dedicted_account_assign_endpoint'),
                config('paystack.dedicted_account_requery_endpoint'),
                config('paystack.dedicted_account_provider_bank_slug')
            );
        });

        $this->app->bind(KriptupService::class, function (Application $app) {
            return new KriptupService(
                config('kriptup.key'),
                config('kriptup.secret'),
                config('kriptup.auth_endpoint'),
                config('kriptup.token_name'),
                config('kriptup.token_expiry'),
                config('kriptup.checkout_endpoint'),
                config('kriptup.currency'),
                config('kriptup.flux_id'),
                config('kriptup.payment_type'),
                config('kriptup.fee_bearer'),
                config('kriptup.verify_endpoint')
            );
        });

        $this->app->bind(MonnifyService::class, function (Application $app) {
            return new MonnifyService(
                config('monnify.api_key'),
                config('monnify.secret_key'),
                config('monnify.auth_endpoint'),
                config('monnify.token_name'),
                config('monnify.token_expiry'),
                config('monnify.initialize_endpoint'),
                config('monnify.currency'),
                config('monnify.verify_endpoint'),
                config('monnify.contract_code'),
                config('monnify.reserved_account_endpoint')
            );
        });
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        Http::macro(
            'flutterwave',
            fn () => httpClient()
                ->baseUrl(config('flutterwave.base_url'))
                ->withToken(config('flutterwave.secret_key'))
        );

        Http::macro(
            'paystack',
            fn () => httpClient()
                ->baseUrl(config('paystack.base_url'))
                ->withToken(config('paystack.secret_key'))
        );

        Http::macro('kriptup', fn () => httpClient()->baseUrl(config('kriptup.base_url')));

        Http::macro('monnify', fn () => httpClient()->baseUrl(config('monnify.base_url')));

    }
}
