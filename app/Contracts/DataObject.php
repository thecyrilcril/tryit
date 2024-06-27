<?php

declare(strict_types=1);

namespace App\Contracts;

interface DataObject
{
    public function data(): object;
}
