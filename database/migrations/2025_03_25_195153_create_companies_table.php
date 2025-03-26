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
        Schema::create('companies', function (Blueprint $table) {
            $table->id();
            $table->string('acti_pri_comp')->nullable();
            $table->timestamps();
        });
        
// Insertar datos iniciales al migrar (Opcional)
DB::table('companies')->insert([
    ['acti_pri_comp' => 'antinarcoticos'],
    ['acti_pri_comp' => 'contra guerrilla'],
    ]);
    
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('companies');
    }
};


