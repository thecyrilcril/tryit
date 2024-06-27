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
        Schema::create('prices', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger(column: 'ngn')->nullable()->index();
            $table->unsignedInteger(column: 'usd')->nullable()->index();
            $table->unsignedInteger(column: 'ugx')->nullable()->index();
            $table->unsignedInteger(column: 'kes')->nullable()->index();
            $table->unsignedInteger(column: 'zar')->nullable()->index();
            $table->unsignedInteger(column: 'zmw')->nullable()->index();
            $table->unsignedInteger(column: 'eur')->nullable()->index();
            $table->unsignedInteger(column: 'ghs')->nullable()->index();
            $table->unsignedInteger(column: 'tnz')->nullable()->index();
            $table->unsignedInteger(column: 'rwf')->nullable()->index();
            $table->unsignedInteger(column: 'xaf')->nullable()->index();
            $table->unsignedInteger(column: 'xof')->nullable()->index();
            $table->morphs(name: 'priceable');
            $table->timestamps();
            $table->engine = 'InnoDB';
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('costs');
    }
};
