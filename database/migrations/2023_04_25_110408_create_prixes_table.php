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
        Schema::create('prixes', function (Blueprint $table) {
            $table->id();
            $table->integer("numero");
            $table->string("designation");
            $table->integer("unite");
            $table->integer("quantite");
            $table->integer("prix_unitaire");
            //
            //$table->unsignedBigInteger("categorie_prix_id");
            //$table->foreign('categorie_prix_id')->references('id')->on('categorie_prixes'); // Calling Other Table Using foreign Key 
            $table->string("categorie_prix");
            //
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('prixes');
    }
};
