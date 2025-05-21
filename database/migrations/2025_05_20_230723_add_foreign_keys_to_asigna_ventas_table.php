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
        Schema::table('asigna_ventas', function (Blueprint $table) {
            $table->foreign(['id_venta'], 'asigna_ventas_ibfk_1')->references(['id_venta'])->on('ventas')->onUpdate('restrict')->onDelete('restrict');
            $table->foreign(['id_producto'], 'asigna_ventas_ibfk_2')->references(['id_producto'])->on('productos')->onUpdate('restrict')->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('asigna_ventas', function (Blueprint $table) {
            $table->dropForeign('asigna_ventas_ibfk_1');
            $table->dropForeign('asigna_ventas_ibfk_2');
        });
    }
};
