<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCommandesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('commandes', function (Blueprint $table) {
            $table->increments('id');
            $table->Biginteger('numcommande');
            $table->date('datecommande');
            $table->enum('etatcommande', ['confirmed','prepared','shipped']);
            $table->integer('client_id')->unsigned();
            $table->foreign('client_id')->references('id')->on('clients')->onDelete('cascade')->onUpdate('cascade');
            // $table->integer('detailcommande_id')->unsigned();
            // $table->foreign('detailcommande_id')->references('id')->on('detailcommandes')->onDelete('cascade')->onUpdate('cascade');
            $table->timestamps();
        });
    }

    /** *
     *Reverse the migrations.
    * @return void
     */ 
    public function down()
    {
        Schema::dropIfExists('commandes');
    }
}
