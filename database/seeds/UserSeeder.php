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
        DB::table('user')->insert([
        	'name'=>'Raihan Salman',
        	'email'=>'admin@gmail.com',
        	'id_class'=>'1',
        	'password'=>hash:,
        	'level'

    }
}
