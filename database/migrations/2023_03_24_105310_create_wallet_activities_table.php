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
        Schema::create('wallet_activities', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')
                ->constrained()
                ->cascadeOnUpdate();
            $table->foreignId('wallet_id')
                ->constrained()
                ->cascadeOnUpdate();
            $table->unsignedInteger(column: 'amount');
            $table->unsignedInteger(column: 'fees')->nullable();
            $table->string(column: 'type', length: 6)->default(\App\Enums\WalletActivityType::CREDIT->value);
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
        Schema::dropIfExists('wallet_activities');
    }
};
