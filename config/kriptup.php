<?php

declare(strict_types=1);

return [
  'base_url' => env('KRIPTUP_BASE_URL', ''),
  'secret' => env('KRIPTUP_SECRET', ''),
  'key' => env('KRIPTUP_KEY', ''),
  'token_name' => env('KRIPTUP_TOKEN', ''),
  'token_expiry' => env('KRIPTUP_TOKEN_EXPIRY', ''),
  'flux_id' => env('KRIPTUP_FLUX_ID', ''),
  'auth_endpoint' => env('KRIPTUP_AUTH_ENDPOINT', ''),
  'checkout_endpoint' => env('KRIPTUP_CHECKOUT_ENDPOINT', ''),
  'verify_endpoint' => env('KRIPTUP_VERIFY_ENDPOINT', ''),
  'signing_secret' => env('KRIPTUP_SIGNING_SECRET', ''),
  'payment_type' => env('KRIPTUP_PAYMENT_TYPE', ''),
  'fee_bearer' => env('KRIPTUP_FEE_BEARER', ''),
  'currency' => env('KRIPTUP_CURRENCY', ''),
];
