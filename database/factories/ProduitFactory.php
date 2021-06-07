<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Produit;
use Faker\Generator as Faker;

$factory->define(Produit::class, function (Faker $faker) {
    return [

        'nomproduit'=>$faker->word,
        'prixdevente'=>$faker->randomFloat(3),
        'stock'=>$faker->randomNumber,
        'taille'=>$faker->randomElement(['S','M','L']),
        'categorie'=>$faker->randomElement(['Homme','Femme']),
        'description'=>$faker->sentence,
        'photo'=>$faker->sentence,
        'created_at'=>now()


    ];
});
