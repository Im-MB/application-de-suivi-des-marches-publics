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
        Schema::create('categorie_prixes', function (Blueprint $table) {
            $table->id();
            $table->integer("categorie_prix_id");
            $table->integer("prix");
            //
            //$table->unsignedBigInteger("marche_id");
            //$table->foreign('marche_id')->references('id')->on('marches'); // Calling Table Marche Using foreign Key 
            $table->string("marche");
            //
            $table->string("designation");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //---- Calling Table Marche ----
        //Schema::table('categorie_prixes', function (Blueprint $table) {
        //    $table->dropForeign(['marche_id']);
        //});
        //---- Calling Table Marche ----
        Schema::dropIfExists('categorie_prixes');
    }
};
