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
        Schema::create('ventas', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('payment_types_id');
            $table->decimal('total', 15, 2);
            $table->enum('estado', ['pendiente', 'realizado', 'cancelado'])->default('pendiente');
            $table->unsignedBigInteger('user_id');
            $table->timestamps();

            $table->foreign('payment_types_id')->references('id')->on('payment_types');
            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ventas');
    }
};