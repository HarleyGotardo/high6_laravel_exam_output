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
        Schema::create('patients', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->unsignedBigInteger('brgy_id');
            $table->string('number');
            $table->string('email')->nullable();
            $table->enum('case_type', ['PUI', 'PUM', 'Positive on Covid', 'Negative on Covid']);
            $table->enum('coronavirus_status', ['Active', 'Recovered', 'Death']);
            $table->timestamps();
    
            $table->foreign('brgy_id')->references('id')->on('brgys')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('patients');
    }
};
