<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
    
        $this->call(clientsTableSeeder::class);
        $this->call( CommandesTableSeeder::class);
       $this->call( DetailcommandesTableSeeder::class);
        $this->call(  ProduitsTableSeeder::class);
        $this->call( PaiementsTableSeeder::class);
      

       
     
      
    
    }
}
