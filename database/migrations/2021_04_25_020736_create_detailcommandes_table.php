<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetailcommandesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detailcommandes', function (Blueprint $table) {
            $table->increments('id');
            $table->double('prixunitaire', 8, 3);
            $table->double('prixtotale', 8, 3);
            $table->integer('quantitecommande');
            $table->string('adressecommande');
            $table->integer('commande_id')->unsigned();
            $table->foreign('commande_id')->references('id')->on('commandes')->onDelete('cascade')->onUpdate('cascade');
            $table->integer('Produit_id')->unsigned();
            $table->foreign('Produit_id')->references('id')->on('produits')->onDelete('restrict')->onUpdate('restrict');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('detailcommandes');
    }
}
