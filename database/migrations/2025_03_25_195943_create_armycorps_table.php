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
        Schema::create('armycorps', function (Blueprint $table) {
            $table->id();
            $table->integer('denom_ce');
            $table->timestamps();
        });
        // Insertar datos iniciales
 DB::table('armycorps')->insert([
    ['denom_ce' => 135],
    [ 'denom_ce' => 112],
    ['denom_ce' => 50],
    [ 'denom_ce' => 200],
]);

    }
 
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('armycorps');
    }
};
