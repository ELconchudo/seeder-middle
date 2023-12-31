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
        Schema::create('pokedexes', function (Blueprint $table) {
            $table->id();
            $table->string('Nombre')->notNullable();
            $table->enum('Tipo', ['fuego', 'agua', 'eléctrico'])->notNullable();
            $table->enum('Tamaño', ['grande', 'mediano', 'pequeño']);
            $table->double('Peso');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pokedexes');
    }
};
