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
        	'name' => 'Admin',
            'role' => 'ADM',  
            'email'=> 'admin@gmail.com',
            'password' => bcrypt('admin'),
            'mobilenumber'=> '9402765302',
            'location' => 'Dimapur',
            'isactive'=>1,
            'mod_by'=>'admin',
            'forgotpassword'=>0,

         ],
          [
        	'name' => 'Teacher ',
            'role' => 'THR',  
            'email'=> 'teacher@gmail.com',
            'password' => bcrypt('admin'),
            'mobilenumber'=> '9402765302',
            'location' => 'Kohima',
            'isactive'=>1,
            'mod_by'=>'admin',
            'forgotpassword'=>0,

         ],
          [
        	'name' => 'Student',
            'role' => 'STD',  
            'email'=> 'student@gmail.com',
            'password' => bcrypt('admin'),
            'mobilenumber'=> '9402765302',
            'location' => 'Jalukie',
            'isactive'=>1,
            'mod_by'=>'admin',
            'forgotpassword'=>0,

         ]
     ]);
    }
}
