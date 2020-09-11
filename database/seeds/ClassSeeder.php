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
            'class_name'=>'X RPL',
            'majors'=>'Rekayasa Perangkat Lunak'
        ]);

        DB::table('classes')->insert([
            'class_name'=>'X MM',
            'majors'=>'Multimedia'
        ]);

        DB::table('classes')->insert([
            'class_name'=>'XI MM 1',
            'majors'=>'Multimedia'
        ]);

        DB::table('classes')->insert([
            'class_name'=>'XI MM 2',
            'majors'=>'Multimedia'
        ]);

        DB::table('classes')->insert([
            'class_name'=>'XI RPL ',
            'majors'=>'Rekayasa Perangkat Lunak'
        ]);

        DB::table('classes')->insert([
            'class_name'=>'XII MM',
            'majors'=>'Multimedia'
        ]);

        DB::table('classes')->insert([
            'class_name'=>'XII RPL 1',
            'majors'=>'Rekayasa Perangkat Lunak'
        ]);

        DB::table('classes')->insert([
            'class_name'=>'XII RPL 2',
            'majors'=>'Rekayasa Perangkat Lunak'
        ]);

        
        


       
        	
    }
}
