<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Detailcommande;
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
/*    $table->increments('id');
            $table->double('prixunitaire', 8, 3);
            $table->double('prixtotale', 8, 3);
            $table->integer('quantitecommande');
            $table->string('adressecommande');

            $table->integer('Commande_id')->unsigned();
            $table->foreign('Commande_id')->references('id')->on('Commandes')->onDelete('cascade')->onUpdate('cascade');
            $table->integer('Produit_id')->unsigned();
            $table->foreign('Produit_id')->references('id')->on('produits')->onDelete('restrict')->onUpdate('restrict');
            $table->timestamps();*/