<?php
use App\Detailproduit;
use Illuminate\Database\Seeder;

class DetailproduitsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Detailproduit::class, 10)->create()->create();
    }
}
