<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class SiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$faker = Faker::create();
    	for ($i=0; $i < 5 ; $i++) {

    	DB::table('siswa')->insert([
            'name'     => $faker->name,
            'kelas'	   => $faker->name,
            'jurusan'  => $faker->name,
            'jenis_kelamin'  => $faker->name,
        ]);

    	}
           
    }

}
