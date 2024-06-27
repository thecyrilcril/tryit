<?php

declare(strict_types=1);

Route::post('/monnify-wh', \App\Http\Controllers\Webhooks\Payments\MonnifyWebhookController::class)
    ->middleware('whitelist.monnify.ip.addresses');

Route::post('/paystack-wh', \App\Http\Controllers\Webhooks\Payments\PaystackWebhookController::class)
    ->middleware('whitelist.paystack.ip.addresses');

Route::post('/flutterwave-wh', \App\Http\Controllers\Webhooks\Payments\FlutterwaveWebhookController::class);

Route::post('/kriptup-wh', \App\Http\Controllers\Webhooks\Payments\KriptupWebhookController::class);
