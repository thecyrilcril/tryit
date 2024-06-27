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
        Schema::create('transactions', function (Blueprint $table) {
            $table->id();
            $table->foreignId(column: 'user_id')
                ->constrained()
                ->cascadeOnUpdate();
            $table->morphs(name: 'transactable');
            // $table->string('type', 10)->default(\App\Enums\TransactionType::PURCHASE())->index();
            $table->unsignedInteger(column: 'amount');
            $table->char(column: 'currency', length: 3)->default('NGN');
            $table->string(column: 'status', length: 10)
                ->default(\App\Enums\TransactionStatus::INITIATED->value)
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
        Schema::dropIfExists('transactions');
    }
};
