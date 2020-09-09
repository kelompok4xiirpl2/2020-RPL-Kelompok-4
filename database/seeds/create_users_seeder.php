<?php

use Illuminate\Database\Seeder;

class create_users_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table('users')->insert([
            'role_id'=>'1',
        	'name'=>'Admin',
        	'email'=>'admin@gmail.com',
        	'password'=>Hash::make('admin'),
        	'level'=>'1'
        	]);

           DB::table('users')->insert([
            'role_id'=>'2',
            'name'=>'Student',
            'class_id'=>'1',
            'email'=>'student@gmail.com',
            'password'=>Hash::make('student'),
            'level'=>'2'
            ]);
    }
}
