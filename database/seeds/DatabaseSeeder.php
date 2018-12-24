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
        $this->call(UsersTableSeeder::class);
<<<<<<< HEAD
        $this->call(MenusTableSeeder::class);
=======
        $this->call(PackagesTableSeeder::class);
>>>>>>> c9e5967714d9e7e1d504369ddc80fdabeaa119b0
    }
}
