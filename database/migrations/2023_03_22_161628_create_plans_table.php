<?php

declare(strict_types=1);

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class () extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('plans', function (Blueprint $table) {
            $table->id();
            $table->string(column: 'title', length: 100);
            $table->string(column: 'description', length: 255);
            $table->string(column: 'interval', length: 10)
                ->default(\App\Enums\Plan\Interval::MONTHLY->value)
                ->index();
            $table->tinyInteger(column: 'trial_days')->default(0);
            $table->smallInteger(column: 'times')->default(0);
            $table->string(column: 'status', length: 8)
                ->default(\App\Enums\Plan\Status::ACTIVE->value)
                ->index();
            $table->timestamps();
            $table->engine = 'InnoDB';
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('plans');
    }
};
