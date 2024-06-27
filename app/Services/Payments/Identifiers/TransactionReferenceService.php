<?php

declare(strict_types=1);

namespace App\Services\Payments\Identifiers;

use App\Contracts\Payments\TransactionReference;

final class TransactionReferenceService implements TransactionReference
{
    public function generate(string $prefix = null): string
    {
        if (! $prefix) {
            return str()->random(13);
        }
        return str(str()->random(13))
          ->prepend($prefix . '-')
          ->value();
    }
}
