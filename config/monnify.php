<?php

declare(strict_types=1);

return [
    'base_url' => env('MONNIFY_BASE_URL', ''),
    'api_key' => env('MONNIFY_API_KEY', ''),
    'secret_key' => env('MONNIFY_SECRET_KEY', ''),
    'auth_endpoint' => env('MONNIFY_AUTH_ENDPOINT', ''),
    'auth_endpoint' => env('MONNIFY_AUTH_ENDPOINT', ''),
    'initialize_endpoint' => env('MONNIFY_INITIALIZE_ENDPOINT', ''),
    'currency' => env('MONNIFY_CURRENCY', ''),
    'verify_endpoint' => env('MONNIFY_VERIFY_ENDPOINT', ''),
    'token_name' => env('MONNIFY_TOKEN', ''),
    'token_expiry' => env('MONNIFY_TOKEN_EXPIRY', ''),
    'contract_code' => env('MONNIFY_CONTRACT_CODE', ''),
    'reserved_account_endpoint' => env('MONNIFY_RESERVED_ACCOUNT_ENDPOINT', ''),
    'currency' => env('MONNIFY_CURRENCY', '')
];
