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
        Schema::create('quantite_executes', function (Blueprint $table) {
            $table->id();
            //
            //$table->unsignedBigInteger("prix_id");
            //$table->foreign('prix_id')->references('id')->on('prixes'); // Calling Table Prix Using foreign Key
            $table->integer("prix");
            //
            $table->integer("quantite");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //---- Calling Table Prix ----
        //Schema::table('quantite_executes', function (Blueprint $table) {
        //    $table->dropForeign(['prix_id']);
        //});
        //---- Calling Table Prix ----
        Schema::dropIfExists('quantite_executes');
    }
};
