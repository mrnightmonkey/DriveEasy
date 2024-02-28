<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('cars', function (Blueprint $table) {
            $table->id();
            $table->string('carname')->nullable;
            $table->string('carimage')->nullable;
            $table->string('cardescription')->nullable;
            $table->string('carluggage')->nullable;
            $table->string('cardoor')->nullable;
            $table->string('carprice')->nullable;
            $table->string('carpassenger')->nullable;
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cars');
    }
};
