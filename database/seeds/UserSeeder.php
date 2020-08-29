<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
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
        	'id_class'=>'1',
        	'password'=>Hash::make('admin'),
        	'level'=>'1' ]);

    }
}
