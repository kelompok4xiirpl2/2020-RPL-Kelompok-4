<?php

use Illuminate\Database\Seeder;

class ClassSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('classes')->insert([
        	'class_name'=>'XII RPL 2',
        	'majors'=>'Rekayasa Perangkat Lunak'
        ]);
        	
    }
}
