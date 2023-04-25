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
        Schema::create('marches', function (Blueprint $table) {
            $table->id();
            $table->integer("numero_marche");  
            //
            //$table->unsignedBigInteger("appel_offre_id");  
            //$table->foreign('appel_offre_id')->references('id')->on('appel_offres'); // Calling Other Table Using foreign Key APL OFFRE
            $table->string("appel_offre");
            //
            $table->string("exercice");
            //
            //$table->unsignedBigInteger("type_marche_id");  
            //$table->foreign('type_marche_id')->references('id')->on('type_marches'); // Calling Other Table Using foreign Key TYPE MARCHE
            $table->string("type_marche");
            //
            $table->date("date_approbation");
            $table->date("date_notification_approbation");
            $table->date("date_ordre_service");
            $table->date("delai_execution");
            $table->string("responsable_de_suivi");//user??
            $table->integer("montant");
            $table->integer("prix_revisable");
            $table->integer("delai_garantie");
            $table->date("date_reception_provisoire");
            $table->date("date_reception_definitive");
            $table->date("date_resiliation");
            $table->string("motif_resiliation");
            $table->string("pieces_jointes");
            $table->string("attributaire");
            $table->string("statut");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('marches');
    }
};
