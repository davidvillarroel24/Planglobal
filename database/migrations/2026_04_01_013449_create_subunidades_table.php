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
        Schema::create('subunidades', function (Blueprint $table) {
            $table->id();
            $table->string('codigo', 5)->nullable();
            $table->string('titulo', 300)->nullable();

            $table->foreignId('id_unidades_tematicas')
                ->constrained('unidades_tematicas');

            $table->string('iteration', 500)->nullable();
            $table->string('ignicion', 500)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('subunidades');
    }
};
