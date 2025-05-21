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
        Schema::create('asigna_ventas', function (Blueprint $table) {
            $table->integer('id_asigna_venta', true);
            $table->integer('id_venta')->index('id_venta');
            $table->integer('id_producto')->index('id_producto');
            $table->integer('cantidad')->default(1);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('asigna_ventas');
    }
};
