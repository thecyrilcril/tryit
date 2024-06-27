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
        Schema::create('cards', function (Blueprint $table) {
            $table->id();
            $table->foreignId(column: 'user_id')
                ->constrained()
                ->cascadeOnUpdate()
                ->cascadeOnDelete();
            $table->string(column: 'tokenizing_gateway', length: 20);
            $table->string(column: 'email', length: 100);
            $table->text(column: 'token');
            $table->string(column: 'token_hash', length: 64)->unique();
            $table->string(column: 'bin', length: 6);
            $table->string(column: 'last4digits', length: 4);
            $table->string(column: 'type', length: 20);
            $table->string(column: 'expiry', length: 5);
            $table->string(column: 'paystack_signature', length: 50)->nullable()->unique();
            $table->timestamps();
            $table->engine = 'InnoDB';
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cards');
    }
};
