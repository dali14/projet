<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Commande;
use App\Client;
use Faker\Generator as Faker;

$factory->define(Commande::class, function (Faker $faker) {
    return [
        'numcommande'=>$faker->randomNumber,
        'datecommande'=>$faker->datetime,
        'etatcommande'=>$faker->randomElement(['confirmed','prepared','shipped']),
        'Client_id'=>Client::get('id')->random(),
        'created_at'=>now()
    ];
});

  /*  $table->increments('id');
            $table->Biginteger('numcommande');
            $table->date('datecommande');
            $table->enum('etatcommande', ['confirmed','prepared','shipped']);

            $table->integer('Client_id')->unsigned();
           $table->foreign('Client_id')->references('id')->on('clients')->onDelete('cascade')->onUpdate('cascade');
            $table->timestamps();*/
        
