<?php

use Illuminate\Database\Seeder;

class SubjectsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('subjects')->insert([
        	'name'       => 'PBO',
        	'teacher_id' => '1'
        ]);

        DB::table('subjects')->insert([
        	'name'       => 'PWPB',
        	'teacher_id' => '2'
        ]);

        DB::table('subjects')->insert([
        	'name' 		 => 'BASDAT',
        	'teacher_id' => '3'
        ]);

        DB::table('subjects')->insert([
        	'name'       => 'PDKK',
        	'teacher_id' => '3'
        ]);

        DB::table('subjects')->insert([
            'name'       => 'PAB',
            'teacher_id' => '4'
        ]);

         DB::table('subjects')->insert([
            'name'       => 'PJOK',
            'teacher_id' => '5'
        ]);

         DB::table('subjects')->insert([
            'name'       => 'Bahasa Indonesia',
            'teacher_id' => '6'
        ]);

         DB::table('subjects')->insert([
            'name'       => 'Bahasa Inggris',
            'teacher_id' => '7'
        ]);

         DB::table('subjects')->insert([
            'name'       => 'PKN',
            'teacher_id' => '8'
        ]);

         DB::table('subjects')->insert([
            'name'       => 'Matematika',
            'teacher_id' => '9'
        ]);
         DB::table('subjects')->insert([
        	'name'       => 'Bahasa Jepang',
        	'teacher_id' => '10'
        ]);
           DB::table('subjects')->insert([
            'name'       => 'Fisika',
            'teacher_id' => '11'
        ]);
             DB::table('subjects')->insert([
            'name'       => 'Kimia',
            'teacher_id' => '12'
        ]);
             DB::table('subjects')->insert([
            'name'       => 'Simdig',
            'teacher_id' => '13'
        ]);
               DB::table('subjects')->insert([
            'name'       => 'Pemograman Dasar',
            'teacher_id' => '14'
        ]);
                  DB::table('subjects')->insert([
            'name'       => '-',
            'teacher_id' => '14'
        ]);


    }
}
