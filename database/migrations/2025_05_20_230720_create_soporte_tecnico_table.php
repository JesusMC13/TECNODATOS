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
        Schema::create('soporte_tecnico', function (Blueprint $table) {
            $table->integer('id_soporte', true);
            $table->dateTime('fecha')->useCurrent();
            $table->integer('id_estado')->index('id_estado');
            $table->integer('id_cliente')->index('id_cliente');
            $table->integer('id_empleado')->index('id_empleado');
            $table->integer('id_producto')->index('id_producto');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('soporte_tecnico');
    }
};
