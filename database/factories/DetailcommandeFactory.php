<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Detailcommande;
use App\Commande;
use App\Produit;
use Faker\Generator as Faker;

$factory->define(Detailcommande::class, function (Faker $faker) {
    return [
        'prixunitaire'=>$faker->randomFloat(3),
        'prixtotale'=>$faker->randomFloat(3),
        'quantitecommande'=>$faker->randomNumber,
        'adressecommande'=>$faker->address,
        'Commande_id'=>Commande::get('id')->random(),
        'Produit_id'=>Produit::get('id')->random(),
        'created_at'=>now()
    ];
});



