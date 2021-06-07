<?php


use Illuminate\Database\Seeder;
use App\ Detailcommande;
class DetailcommandesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Detailcommande::class, 100)->create();
    }
}
