<?php

declare(strict_types=1);

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphOne;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Plan extends Model
{
    use HasFactory;

    protected $casts = [
        'interval' => \App\Enums\Plan\Interval::class,
        'status' => \App\Enums\Plan\Status::class,
    ];

    public function price(): MorphOne
    {
        return $this->morphOne(Price::class, 'priceable');
    }

    public function users(): BelongsToMany
    {
        return $this->belongsToMany(User::class, 'subscriptions')
            ->as('subscription')
            ->using(Subscription::class)
            ->withPivot([
                'starts_at',
                'trial_ends_at',
                'expires_at'
            ])
            ->withTimestamps();
    }
}
