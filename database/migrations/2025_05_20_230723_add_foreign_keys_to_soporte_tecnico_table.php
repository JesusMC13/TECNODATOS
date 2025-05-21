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
        Schema::table('soporte_tecnico', function (Blueprint $table) {
            $table->foreign(['id_estado'], 'soporte_tecnico_ibfk_1')->references(['id_estado'])->on('estado')->onUpdate('restrict')->onDelete('restrict');
            $table->foreign(['id_cliente'], 'soporte_tecnico_ibfk_2')->references(['id_cliente'])->on('clientes')->onUpdate('restrict')->onDelete('restrict');
            $table->foreign(['id_empleado'], 'soporte_tecnico_ibfk_3')->references(['id_empleado'])->on('empleados')->onUpdate('restrict')->onDelete('restrict');
            $table->foreign(['id_producto'], 'soporte_tecnico_ibfk_4')->references(['id_producto'])->on('productos')->onUpdate('restrict')->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('soporte_tecnico', function (Blueprint $table) {
            $table->dropForeign('soporte_tecnico_ibfk_1');
            $table->dropForeign('soporte_tecnico_ibfk_2');
            $table->dropForeign('soporte_tecnico_ibfk_3');
            $table->dropForeign('soporte_tecnico_ibfk_4');
        });
    }
};
