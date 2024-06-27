<?php

declare(strict_types=1);

namespace App\Services\Payments\Wallets;

use App\Models\User;
use App\Events\WalletFunded;
use Illuminate\Http\JsonResponse;
use App\Contracts\Payments\Wallet;
use Symfony\Component\HttpFoundation\Response;
use App\ValueObjects\Wallets\WalletCreditableAmount;
use App\Exceptions\Payments\InvalidWalletGatewayException;

final class WalletService implements Wallet
{
    public function fund(int $amount, int $fees, string $gateway, ?string $account_number = null, ?string $bank_name = null, ?string $tx_ref = null)
    {
        $wallet = match($gateway) {
            'paystack' => \App\Models\Wallet::query()
                ->where('bank_account_number', $account_number)
                ->where('bank_name', $bank_name)
                ->firstOrFail(),

            'flutterwave' => \App\Models\Wallet::query()
                ->where('flutterwave_tx_ref', $tx_ref)
                ->firstOrFail(),

            'default' => throw new InvalidWalletGatewayException('Invalid Wallet Gateway'),
        };


        $creaditableAmount = new WalletCreditableAmount(($amount - $fees));

        $wallet->increment('balance', $creaditableAmount->amount);

        // Add to wallet activity
        $walletActivity = \App\Models\WalletActivity::query()->create([
            'user_id' => $wallet->user_id,
            'wallet_id' => $wallet->id,
            'amount' => $amount,
            'fees' => $fees
        ]);

        // fire off events
        WalletFunded::dispatch($walletActivity);

        return new JsonResponse([], Response::HTTP_OK);
    }

    public function withdraw(string $amount, User $user)
    {
    }
}
