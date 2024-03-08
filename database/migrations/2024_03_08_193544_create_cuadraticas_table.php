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
        Schema::create('cuadraticas', function (Blueprint $table) {
            $table->id();
            $table->integer('valora');
            $table->integer('valorb');
            $table->integer('valorc');
            $table->integer('raiz1');
            $table->integer('raiz2');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cuadraticas');
    }
};
