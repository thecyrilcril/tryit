<?php

declare(strict_types=1);

namespace App\Contracts\Processes;

use App\Contracts\DataObject;

interface Process
{
    public function handle(DataObject $payload): mixed;
}
