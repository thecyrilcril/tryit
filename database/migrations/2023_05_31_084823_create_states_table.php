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
        Schema::create('states', function (Blueprint $table) {
            $table->unsignedMediumInteger(column: 'id')->primary();
            $table->unsignedSmallInteger('country_id');
            $table->foreign(columns: 'country_id')
                ->references('id')->on('countries')
                ->constrained()
                ->cascadeOnUpdate();
            $table->string(column: 'name', length: 100);
            $table->engine = 'InnoDB';
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('states');
    }
};
