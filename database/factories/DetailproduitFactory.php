<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Detailproduit;
use Faker\Generator as Faker;

$factory->define(Detailproduit::class, function (Faker $faker) {
    return [
        'dateentree'=>&faker->datetime,
        'datesortie'=>&faker->datetime,
        'quantite'=>&<faker->randomNumber,
        'Produit_id'=>Produit::get('id')->random()
    ];
});
/*      $table->increments('id');
            $table->date('dateentree');
            $table->date('datesortie');
            $table->integer('quantite');
            $table->integer('Produit_id')->unsigned();
            $table->foreign('Produit_id')->references('id')->on('produits')->onDelete('restrict')->onUpdate('restrict');
            $table->timestamps();*/ 
