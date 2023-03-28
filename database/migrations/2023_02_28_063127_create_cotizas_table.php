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
        Schema::create('cotizas', function (Blueprint $table) {
            $table->id();
            $table->string('Nombres');
            $table->bigInteger('Numero')->nullable()->default(11);
            $table->string('Correo');
            $table->string('Servicio');
            $table->string('Terreno');
            $table->biginteger('Presupuesto')->nullable()->default(11);
            $table->string('Tiempo');
            $table->string('Mensaje');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cotizas');
    }
};
