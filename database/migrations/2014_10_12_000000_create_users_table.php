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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->ulid(column: 'key')->unique();
            $table->string(column: 'first_name', length: 20);
            $table->string(column: 'last_name', length: 20);
            $table->string(column: 'full_name', length: 50)->virtualAs("CONCAT(first_name, ' ', last_name)");
            $table->string(column: 'email', length: 100)->unique();
            $table->string(column: 'bvn', length: 11)->unique()->nullable();
            $table->string(column: 'phone_number', length: 16)->unique()->nullable();
            $table->timestamp(column: 'email_verified_at')->nullable();
            $table->string(column: 'password');
            $table->rememberToken();
            $table->softDeletes();
            $table->timestamps();
            $table->engine = 'InnoDB';
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
