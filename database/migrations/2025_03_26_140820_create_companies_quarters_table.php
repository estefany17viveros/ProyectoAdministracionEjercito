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
        Schema::create('companies_quarters', function (Blueprint $table) {
            $table->id();
            $table -> unsignedBigInteger('company_id')->nullable();
            $table -> unsignedBigInteger('quarter_id')->nullable();
            
            $table->foreign('company_id')->references('id')->on('companies')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('quarter_id')->references('id')->on('quarters')->onDelete('cascade')->onUpdate('cascade');

            $table->timestamps();
        });
                // Insertar datos iniciales
DB::table('companies_quarters')->insert([
    [],
    [],
   
    ]);
    }
    

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('companies_quarters');
    }
};
