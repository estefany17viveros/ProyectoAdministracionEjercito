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
        Schema::create('services_soldiers', function (Blueprint $table) {
            $table->id();
            $table->date('date');

            $table -> unsignedBigInteger('service_id')->nullable();
            $table -> unsignedBigInteger('soldier_id')->nullable();
            
            $table->foreign('service_id')->references('id')->on('services')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('soldier_id')->references('id')->on('soldiers')->onDelete('cascade')->onUpdate('cascade');
            
            $table->timestamps();
        });
        // Insertar datos iniciales
DB::table('services_soldiers')->insert([
['date' => '2024-10-01'],
['date' => '2024-10-02'],
['date' => '2024-10-04'],

]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('services_soldiers');
    }
};

