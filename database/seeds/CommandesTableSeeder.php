<?php

use Illuminate\Database\Seeder;
use App\Commande;
class CommandesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Commande::class, 100)->create();
    }
}
