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
        Schema::create('asignacion', function (Blueprint $table) {
            $table->id();

            $table->foreignId('id_turnos')
                ->constrained('turnos')
                ->cascadeOnUpdate()
                ->restrictOnDelete();


            $table->foreignId('id_user')
                ->constrained('users');

            $table->foreignId('id_materias')
                ->constrained('materias')
                ->cascadeOnUpdate()
                ->restrictOnDelete();

            $table->foreignId('id_gestion')
                ->constrained('gestiones');

            $table->string('teoricas', 2)->nullable();
            $table->string('practicas', 2)->nullable();
            $table->string('aula', 15)->nullable();
            $table->text('proposito')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('asignacion');
    }
};
