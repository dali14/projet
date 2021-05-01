<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetailproduitsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detailproduits', function (Blueprint $table) {
            $table->increments('id');
            $table->date('dateentree');
            $table->date('datesortie');
            $table->integer('quantite');
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
        Schema::dropIfExists('detailproduits');
    }
}
