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
        Schema::create('docas', function (Blueprint $table) {
            $table->id();
            $table->string('status');

            $table->unsignedBigInteger('estacao_id');
            $table->foreign('estacao_id')->references('id')->on('estacaos')->onDelete('cascade')->onUpdate('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('docas');
    }
};
