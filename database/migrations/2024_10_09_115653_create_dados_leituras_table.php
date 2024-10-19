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
        Schema::create('dados_leituras', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->decimal('corrente', 8, 2);
            $table->date('dataLeitura');
            $table->time('horaLeitura');
            $table->unsignedBigInteger('motor_id');
            $table->foreign('motor_id')->references('id')->on('motors')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('dados_leituras');
    }
};
