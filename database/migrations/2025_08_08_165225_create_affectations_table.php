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
        Schema::create('affectations', function (Blueprint $table) {
            $table->id();
            $table->string('date');
            // on utilise pour les grandes données
            $table->unsignedBigInteger('voitureid');
            // onDelete("cascade") signifie que qu'on le père est supprimé les enfants aussi se suppriment
            $table->foreign('voitureid')->references('id')->on('voitures');
            
            $table->unsignedBigInteger('chauffeurid');
            // onDelete("cascade") signifie que qu'on le père est supprimé les enfants aussi se suppriment
            $table->foreign('chauffeurid')->references('id')->on('chauffeurs');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('affectations');
    }
};
