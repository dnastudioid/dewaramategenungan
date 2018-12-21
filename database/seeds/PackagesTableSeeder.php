<?php

use Illuminate\Database\Seeder;
use App\Package;
use Faker\Factory as Faker;

class PackagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('id_ID');

        for ($i=1; $i <20; $i++) { 
            Package::create([
                'nama' => $faker->company,
                'price' => '10',
                'detail' => $faker->text(200)
            ]);
        }
    }
}
