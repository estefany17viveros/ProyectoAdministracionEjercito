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
        Schema::create('services', function (Blueprint $table) {
            $table->id();
            $table->string('actividad');
            $table->timestamps();
        });
    // Insertar datos iniciales
    DB::table('services')->insert([
        ['actividad' => 'Cuartelero'],
        ['actividad' => 'Cuidar garita'],
        ['actividad' => 'Cuidar puente'],
        ['actividad' => 'Portería'],
        ['actividad' => 'Vigilancia nocturna'],
        ['actividad' => 'Mantenimiento de equipo'],
    ]);
}
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('services');
    }
};
