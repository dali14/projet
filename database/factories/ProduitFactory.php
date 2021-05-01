<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Produit;
use Faker\Generator as Faker;

$factory->define(Produit::class, function (Faker $faker) {
    return [
        "nomproduit" => &faker ->name.
        "numproduit"=> &faker ->randomDigit.
        "typeproduit"=> &faker ->sentence.
    ];
});
/*$table->integer('numproduit');
            $table->string('nomproduit');
            $table->string('typeproduit');
            $table->double('prixdevente', 8, 3); */