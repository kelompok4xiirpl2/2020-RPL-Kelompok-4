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

    }
}
