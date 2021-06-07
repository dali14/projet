<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Commande;
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