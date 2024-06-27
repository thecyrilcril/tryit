<?php

declare(strict_types=1);

namespace App\Listeners;

use App\Events\WalletFunded;

class SendFundingNotification
{
    /**
     * Create the event listener.
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     */
    public function handle(WalletFunded $event): void
    {
        //
    }
}
