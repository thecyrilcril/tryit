<?php

declare(strict_types=1);

namespace App\Services\WebhookEvents\Paystack;

use Illuminate\Http\JsonResponse;
use App\ValueObjects\Wallets\AccountObject;
use Symfony\Component\HttpFoundation\Response;
use App\Exceptions\NubanAccountCreationException;

final class PaystackAssignDedicatedAccount
{
    public string $gateway = 'paystack';

    public function __construct(private readonly object $payload)
    {
    }

    public function __invoke()
    {
        try {
            if ($this->payload->data->dedicated_account->assigned !== true) {
                throw new NubanAccountCreationException('Dedicated Account was not assigned');
            }

            $walletUser = \App\Models\User::query()
                ->where('email', $this->payload->data->customer->email)
                ->firstOrFail();


            $walletAccount = new AccountObject(
                bank_account_name: $this->payload->data->dedicated_account->account_name,
                bank_account_number: $this->payload->data->dedicated_account->account_number,
                bank_name: $this->payload->data->dedicated_account->bank->name,
                gateway: $this->gateway
            );

            if (null === $walletUser->wallet) {
                $walletUser->wallet()->create($walletAccount->toArray());
            }

            return new JsonResponse([], Response::HTTP_OK);
        } catch(\Exception $exception) {
            logger($exception);
        }
    }
}
