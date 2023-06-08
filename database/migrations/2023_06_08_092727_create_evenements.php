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
        Schema::create('evenements', function (Blueprint $table) {
            $table->id();
            $table->string('titre')->nullable();
            $table->string('mois')->nullable();
            $table->integer('annee')->nullable();
            $table->string('lieu')->nullable();
            $table->string('pays')->nullable();
            $table->string('date')->nullable();
            $table->unsignedbigInteger('tournee_id')->nullable();
            $table->foreign('tournee_id')->references('id')->on('tournees');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('evenements');
    }
};
