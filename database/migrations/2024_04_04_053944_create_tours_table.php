<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

use App\Models\Tour;
return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('tours', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('description_corta');
            $table->text('description_larga');
            $table->integer('duracion_horas');
            $table->time('hora_inicio');
            $table->time('hora_fin');
            $table->integer('max_personas');
            $table->integer('min_personas');
            $table->string('imagen'); 
            //$table->enum('estatus', ['BORRADOR', 'REVISION', 'PUBLICADO', 'INACTIVO'])->default('BORRADOR');
            $table->enum('estatus',[Tour::BORRADOR, Tour::REVISION, Tour::PUBLICADO, Tour::INACTIVO])->default(Tour::BORRADOR);
            //campo para generar la url amigable
            $table->string('slug');
            $table->string('idioma');
            $table->text('informacion_adicional')->nullable(); 
            $table->text('politicas_cancela')->nullable(); 
            $table->text('recomendaciones')->nullable();
            $table->decimal('precio', 10, 2)->default(150);
            $table->integer('stock');
            //relaciones con categorias, precios con unsignedBigInteger
            //$table->unsignedBigInteger('user_id')->nullable();
            $table->unsignedBigInteger('category_id')->nullable();
            //$table->unsignedBigInteger('price_id')->nullable();
            //$table->foreign('user_id')->references('id')->on('users')->onDelete('set null');
            $table->foreign('category_id')->references('id')->on('categories')->onDelete('set null');
            //$table->foreign('price_id')->references('id')->on('prices')->onDelete('set null');
            $table->timestamps(); 
        });
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tours');
    }
};
