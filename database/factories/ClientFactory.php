<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */
use App\Admin;
use App\Client;
use Faker\Generator as Faker;

$factory->define(Client::class, function (Faker $faker) {
    return [
        'Cin'=> $faker->randomDigit,
        'nom'=> $faker->firstName,
        'prenom'=> $faker->lastName,
        'Gmail'=> $faker->freeEmail,
        'adresse'=> $faker->streetAddress,
        'Tel'=> $faker->e164PhoneNumber,
        'created_at'=>now()
        
    ];
});
