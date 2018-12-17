<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                'name' => 'Jane Doe',
                'email' => 'janedoe@gmail.com',
                'password' => bcrypt('123456'),
            ],
            [
                'name' => 'John Doe',
                'email' => 'john@gmail.com',
                'password' => bcrypt('123456'),
            ],
            [
                'name' => 'John Cena',
                'email' => 'johncena@gmail.com',
                'password' => bcrypt('123456'),
            ]
        ]);
    }
}
