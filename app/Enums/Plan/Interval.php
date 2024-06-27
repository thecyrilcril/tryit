<?php

declare(strict_types=1);

namespace App\Enums\Plan;

enum Interval: string
{
    case DAILY = 'daily';
    case HOURLY = 'hourly';
    case WEEKLY = 'weekly';
    case MONTHLY = 'monthly';
    case QUATERLY = 'quarterly';
    case YEARLY = 'yearly';
    case LIFETIME = 'lifetime';
}
