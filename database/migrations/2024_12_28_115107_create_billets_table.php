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
        Schema::create('billets', function (Blueprint $table) {
            $table->id();
            $table->string('montant');
            $table->string('mode_paiement');
            $table->string('statut');
            $table->foreignIdFor(\App\Models\Trajet::class)->constrained()->cascadeOnDelete();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('billets');
    }
};
