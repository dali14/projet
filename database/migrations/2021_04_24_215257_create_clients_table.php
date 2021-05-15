<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
            Schema::create('clients', function (Blueprint $table) {
                $table->increments('id');  
                $table->integer('Cin');
                $table->string('nom',70);
                $table->string('prenom',70);
                $table->string('Gmail',250);
                $table->string('adresse',255);
                $table->Biginteger('Tel');
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
        Schema::dropIfExists('clients');
    }
}
