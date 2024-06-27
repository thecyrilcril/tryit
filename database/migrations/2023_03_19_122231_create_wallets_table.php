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
        Schema::create('wallets', function (Blueprint $table) {
            $table->id();
            $table->foreignId(column: 'user_id')
                ->constrained()
                ->cascadeOnUpdate();
            $table->char(column: 'flutterwave_order_ref', length: 25)->unique()->nullable();
            $table->char(column: 'flutterwave_tx_ref', length: 16)->unique()->nullable();
            $table->unsignedInteger(column: 'balance')->default(0);
            $table->string(column: 'bank_account_name', length: 50);
            $table->char(column: 'bank_account_number', length: 10);
            $table->string(column: 'bank_name', length: 50);
            $table->string(column: 'gateway', length: 20);
            $table->char(column: 'currency', length: 3)->default('NGN');
            $table->timestamps();
            $table->engine = 'InnoDB';
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('wallets');
    }
};
