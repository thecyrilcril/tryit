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
        Schema::create('payments', function (Blueprint $table) {
            $table->id();
            $table->foreignId(column: 'user_id')
                ->constrained()
                ->cascadeOnUpdate();
            $table->foreignId(column: 'transaction_id')->nullable()
                ->constrained()
                ->cascadeOnUpdate()
                ->nullOnDelete();
            $table->string(column: 'gateway', length: 20);
            $table->string(column: 'gateway_transaction_identifier', length: 100)->nullable();
            $table->unsignedInteger(column: 'amount');
            $table->integer(column: 'charged_amount')->default(0);
            $table->string(column: 'transaction_reference', length: 20)->unique();
            $table->char(column: 'currency', length: 3)->default('NGN');
            $table->string(column: 'status', length: 10)->default(\App\Enums\PaymentStatus::INITIATED->value)->index();
            $table->timestamps();
            $table->engine = 'InnoDB';
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('payments');
    }
};
