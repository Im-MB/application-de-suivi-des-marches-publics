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
        Schema::create('utilisateurs', function (Blueprint $table) {
            $table->id();
            $table->integer("utilisateur_id");
            
            $table->string("nom");
            $table->string("prenom");
            $table->string("email");
            //
            //$table->unsignedBigInteger("role_id");
            //$table->foreign('role_id')->references('id')->on('roles'); // Calling Other Table Using foreign Key 
            $table->string("role");
            //
            $table->string("function");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('utilisateurs');
    }
};
