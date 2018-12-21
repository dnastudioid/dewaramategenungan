<?php

use Illuminate\Database\Seeder;

class MenusTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('menus')->insert([
	        [
	        	'name' => 'Mango Juice',
	        	'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Hic consequatur maiores quidem, ratione officiis amet ad molestias expedita exercitationem quisquam itaque, omnis debitis necessitatibus laborum doloremque, ipsam impedit rem veniam optio praesentium sit. Dicta voluptas vel, perspiciatis at velit. Voluptate soluta consequuntur repellendus inventore quibusdam minima officiis ipsa totam optio.',
	        	'category' => 'drinks',
	        	'file' => '-',
	        	'created_at' => NOW(),
	        	'updated_at' => NOW(),
	        ],
	    	[
	        	'name' => 'Fried Rice',
	        	'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Hic consequatur maiores quidem, ratione officiis amet ad molestias expedita exercitationem quisquam itaque, omnis debitis necessitatibus laborum doloremque, ipsam impedit rem veniam optio praesentium sit. Dicta voluptas vel, perspiciatis at velit. Voluptate soluta consequuntur repellendus inventore quibusdam minima officiis ipsa totam optio.',
	        	'category' => 'foods',
	        	'file' => '-',
	        	'created_at' => NOW(),
	        	'updated_at' => NOW(),
	        ],
	    	[
	        	'name' => 'Chicken Satay',
	        	'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Hic consequatur maiores quidem, ratione officiis amet ad molestias expedita exercitationem quisquam itaque, omnis debitis necessitatibus laborum doloremque, ipsam impedit rem veniam optio praesentium sit. Dicta voluptas vel, perspiciatis at velit. Voluptate soluta consequuntur repellendus inventore quibusdam minima officiis ipsa totam optio.',
	        	'category' => 'foods',
	        	'file' => '-',
	        	'created_at' => NOW(),
	        	'updated_at' => NOW(),
	        ]
        ]);
    }
}
