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

        Schema::create('destinations', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('description');

            $table->longText('content');
            $table->string('image');
            //En acá, se colocara la direccion de google maps
            $table->string('address');

            $table->string('latitude')->nullable();
            $table->string('longitude')->nullable();
            $table->enum('status', ['ACTIVE', 'INACTIVE'])->default('ACTIVE');
            $table->string('weather')->nullable();
            $table->string('slug');
            $table->string('accesibility');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('destinations');
    }
};
