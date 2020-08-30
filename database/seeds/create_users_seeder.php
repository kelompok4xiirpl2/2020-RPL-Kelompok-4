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
        	'name'=>'Raihan Salman',
        	'email'=>'admin@gmail.com',
        	'class_id'=>'1',
        	'password'=>Hash::make('admin'),
        	'level'=>'1'
        	]);
    }
}
