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
        Schema::create('quarters', function (Blueprint $table) {
            $table->id();
            $table->string('nom_cuartel')->nullable();
            $table->string('ubic')->nullable();
            $table->timestamps();
        });
        // Insertar datos iniciales al migrar (Opcional)
DB::table('quarters')->insert([
    [ 'nom_cuartel' => 'jose pineda', 'ubic' => '15"3\'7\''],
]);

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('quarters');
    }
};


