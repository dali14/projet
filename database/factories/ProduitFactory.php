<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Produit;
use Faker\Generator as Faker;

$factory->define(Produit::class, function (Faker $faker) {
    return [

        'numproduit'=>&faker->randomNumber,
        'nomproduit'=>$faker->word,
        'typeproduit'=>&faker->sentence,
        'created_at'=>now()

      
    ];
});
/*$table->integer('numproduit');
            $table->string('nomproduit');
            $table->string('typeproduit');
            $table->double('prixdevente', 8, 3); */