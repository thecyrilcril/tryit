<?php

declare(strict_types=1);

return [
    'base_url' => env('PAYSTACK_BASE_URL', ''),
    'secret_key' => env('PAYSTACK_SECRET_KEY', ''),
    'initialize_endpoint' => env('PAYSTACK_INITIALIZE_ENDPOINT', ''),
    'verify_endpoint' => env('PAYSTACK_VERIFY_ENDPOINT', ''),
    'customer_endpoint' => env('PAYSTACK_CUSTOMER_ENDPOINT', ''),
    'dedicted_account_provider_bank_slug' => env('PAYSTACK_DEDICATED_ACCOUNT_PROVIDER_BANK_SLUG', ''),
    'dedicted_account_assign_endpoint' => env('PAYSTACK_DEDICATED_ACCOUNT_ASSIGN_ENDPOINT', ''),
    'dedicted_account_requery_endpoint' => env('PAYSTACK_DEDICATED_ACCOUNT_REQUERY_ENDPOINT', ''),
    'charge_authorization_endpoint' => env('PAYSTACK_CHARGE_AUTHORIZATION_ENDPOINT', ''),
    'currency' => env('PAYSTACK_CURRENCY', ''),
];
