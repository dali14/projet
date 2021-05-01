
<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Admin;
use Faker\Generator as Faker;

$factory->define(Admin::class, function (Faker $faker) {
    return [
        'nom'=> $faker->firstName,
        'prenom'=> $faker->lastName,
        'login'=> $faker->sentence,
        'password'=> $faker->word,
        'Gmail'=> $faker->freeEmail,
        'adresse'=> $faker->streetAddress,
        'Tel'=> $faker->e164PhoneNumber,
        'created_at'=>now()
        
      
      ];
});
