<?php

use Illuminate\Database\Seeder;

class StudentsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('students')->insert([
        	'name' => 'Asyiah Nurjanah',
        	'class_id' => '1'
        ]);
    }
}
