<?php
use App\ Detailcommande;
use Illuminate\Database\Seeder;

class DetailcommandesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Detailcommandes::class, 100)->create();
    }
}
