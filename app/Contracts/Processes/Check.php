<?php

declare(strict_types=1);

namespace App\Contracts\Processes;

use Closure;
use App\Contracts\DataObject;

interface Check
{
    public function __invoke(DataObject $payload, Closure $next);
}
