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
        Schema::create('reservations', function (Blueprint $table) {
            $table->id();
            $table->string('nom');
            $table->string('prenom');
            $table->string('piece_identite');
            $table->string('agence');
            $table->integer('num_tel');
            $table->string('lieu_depart');
            $table->string('lieu_arrive');
            $table->string('date_depart');
            $table->date('datdate_arrivee');
            $table->string('heure_depart');
            $table->integer('nombre_place');
            $table->foreignIdFor(\App\Models\Billet::class)->constrained()->cascadeOnDelete();
            $table->foreignIdFor(\App\Models\Categorie::class)->constrained()->cascadeOnDelete();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reservations');
    }
};
