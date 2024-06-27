<?php

declare(strict_types=1);

return [
    'base_url' => env('FLUTTERWAVE_BASE_URL', ''),
    'public_key' => env('FLUTTERWAVE_PUBLIC_KEY', ''),
    'secret_key' => env('FLUTTERWAVE_SECRET_KEY', ''),
    'encryption_key' => env('FLUTTERWAVE_ENCRYPTION_KEY', ''),
    'webhook_secret_hash' => env('FLUTTERWAVE_WEBHOOK_SECRET_HASH', ''),
    'standard_endpoint' => env('FLUTTERWAVE_STANDARD_ENDPOINT', ''),
    'verify_endpoint' => env('FLUTTERWAVE_VERIFY_ENDPOINT', ''),
    'virtual_account_endpoint' => env('FLUTTERWAVE_VIRTUAL_ACCOUNT_ENDPOINT', ''),
    'tokenized_charges_endpoint' => env('FLUTTERWAVE_TOKENIZED_CHARGES_ENDPOINT', ''),
    'currency' => env('FLUTTERWAVE_CURRENCY', ''),
];
