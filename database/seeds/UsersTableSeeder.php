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
        	  'name' => 'System Admin',
            'role' => 'SYA',  
            'email'=> 'admin@gmail.com',
            'password' => bcrypt('admin'),
            'mobilenumber'=> '9402765302',
            'location' => 'Dimapur',
            'designation' => 'System Admin',
            'isactive'=>1,
            'mod_by'=>'admin',
            'forgotpassword'=>0,

         ],
          [
        	'name' => 'Teacher ',
            'role' => 'THR',  
            'email'=> 'teacher@gmail.com',
            'password' => bcrypt('admin'),
            'mobilenumber'=> '9402482757',
            'location' => 'Kohima',
            'designation' => 'Teacher',
            'isactive'=>1,
            'mod_by'=>'admin',
            'forgotpassword'=>0,

         ],
          [
        	'name' => 'Student',
            'role' => 'STD',  
            'email'=> 'student@gmail.com',
            'password' => bcrypt('admin'),
            'mobilenumber'=> '70005780949',
            'location' => 'Jalukie',
            'designation' => 'Student',
            'isactive'=>1,
            'mod_by'=>'admin',
            'forgotpassword'=>0,

         ]
     ]);
    }
}
