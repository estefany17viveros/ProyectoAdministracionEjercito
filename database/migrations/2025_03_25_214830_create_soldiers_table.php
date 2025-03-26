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
        Schema::create('soldiers', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->string('apellido');
            $table->string('grado');

        $table -> unsignedBigInteger('company_id')->nullable();
        $table -> unsignedBigInteger('quarter_id')->nullable();
        $table -> unsignedBigInteger('armycorp_id')->nullable();

        $table->foreign('company_id')->references('id')->on('companies')->onDelete('set null');
        $table->foreign('quarter_id')->references('id')->on('quarters')->onDelete('set null');
        $table->foreign('armycorp_id')->references('id')->on('armycorps')->onDelete('set null');
        
        
    
        $table->timestamps();
    });
    DB::table('soldiers')->insert([
        ['nombre' => 'Alejandro', 'apellido' => 'Plaza', 'grado' => 'Razo'],
        ['nombre' => 'Diego', 'apellido' => 'Castaneda', 'grado' => 'Coronel'],
    ]);
    
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('soldiers');
    }
};

