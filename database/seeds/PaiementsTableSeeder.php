<?php
 use App\ Paiement;
use Illuminate\Database\Seeder;

class PaiementsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory( Paiements::class, 50)->create();
    }
}
