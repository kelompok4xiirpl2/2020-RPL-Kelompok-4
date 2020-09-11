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
        	'teacher_name' => 'Agfie Nurani Hanifah, S.Pd',
        	
        ]);

          DB::table('teachers')->insert([
            'teacher_name' => 'Siti Saadah, S.Pd',
            
        ]);

          DB::table('teachers')->insert([
            'teacher_name' => 'Dede Suryana, A,Md',
            
        ]);
          DB::table('teachers')->insert([
            'teacher_name' => 'Rosmelia, S.Pd',
            
        ]);
          DB::table('teachers')->insert([
            'teacher_name' => 'Leni Maulani, S.Pd',
            
        ]);
          DB::table('teachers')->insert([
            'teacher_name' => 'Deni Setiawan, S.ST',
            
        ]);
          DB::table('teachers')->insert([
            'teacher_name' => 'Arie Martanto, ST',
            
        ]);
          DB::table('teachers')->insert([
            'teacher_name' => 'H.Dayat Hidayat, S.Pd',
            
        ]);
           DB::table('teachers')->insert([
            'teacher_name' => 'Agus Sofyan, S.E',
            
        ]);
           DB::table('teachers')->insert([
            'teacher_name' => 'Hamdan Firmansyah, S.Pd',
            
        ]);
           DB::table('teachers')->insert([
            'teacher_name' => 'Riana Budianti, S.Sos',
            
        ]);
           DB::table('teachers')->insert([
            'teacher_name' => 'Annisa Komalasari',
            
        ]);
           DB::table('teachers')->insert([
            'teacher_name' => 'Roslaila',
            
        ]);
           DB::table('teachers')->insert([
            'teacher_name' => '-',
            
        ]);


    }
}
