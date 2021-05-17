<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Paiement;
use Faker\Generator as Faker;

$factory->define(Paiement::class, function (Faker $faker) {
    return [
        'montant'=>$faker->randomFloat,
        'type'=>$faker->sentence,
        'datepaiement'=>$faker->datetime,
        'Commande_id'=>Commande::get('id')->random(),
        'created_at'=>now()
    ];
});
/*     $table->increments('id');
            $table->double('montant', 8,3 );
            $table->string('type');
            $table->date('datepaiement');

            $table->integer('Commande_id')->unsigned();
            $table->foreign('Commande_id')->references('id')->on('Commandes')->onDelete('cascade')->onUpdate('cascade');
            $table->timestamps();
     */