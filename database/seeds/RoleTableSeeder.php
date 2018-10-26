<?php

use Illuminate\Database\Seeder;

class RoleTableSeeder extends Seeder
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
		        	'name' => 'Admin',
		    
		        ],
		        [
		        	'name' => 'Teacher',
		    
		        ],
		        [
		        	'name' => 'Student',
		    
		        ],
         
     	]);
    }
    
}
