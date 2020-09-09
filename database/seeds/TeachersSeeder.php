<?php

use Illuminate\Database\Seeder;

class TeachersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('teachers')->insert([
        	'teacher_name' => 'Siti Robiah Adawiyah, S.Pd',
        	
        ]); 

        DB::table('teachers')->insert([
        	'teacher_name' => 'Mujahid Munir Muttaqin, S.T',
        	
        ]);

         DB::table('teachers')->insert([
        	'teacher_name' => 'Hannif Kurniawan Muttaqin, S',
        	
        ]); 

         DB::table('teachers')->insert([
        	'teacher_name' => 'Raynaldi Syahputra Nonci, S.Pd',
        	
        ]);

         DB::table('teachers')->insert([
        	'teacher_name' => 'Leni Maulani, S.Pd',
        	
        ]);


    }
}
