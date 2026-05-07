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
        Schema::create('unidades_tematicas', function (Blueprint $table) {
            $table->id();
            $table->string('titulo', 300)->nullable();
            $table->string('competencia', 1000)->nullable();

            $table->foreignId('id_asignacion')
                ->constrained('asignacion');

            $table->string('codigo', 5)->nullable();
            $table->text('ser')->nullable();
            $table->text('hacer')->nullable();
            $table->text('saber')->nullable();
            $table->text('criterios')->nullable();
            $table->text('evidencias')->nullable();
            $table->text('bibliografia')->nullable();
            $table->string('clases', 2)->nullable();

            $table->date('inicio')->nullable();
            $table->date('fin')->nullable();
            $table->string('observaciones', 200)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('unidades_tematicas');
    }
};
