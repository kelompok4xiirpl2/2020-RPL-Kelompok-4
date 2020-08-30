<?php

use Illuminate\Database\Seeder;

class AnnouncementsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('announcements')->insert([
        		'title'=>'tugas',
        		'class_id'=>'1',
        		'subject'=>'PWPB',
        		'teacher'=>'Mujahid Munir Muttaqin',
        		'description'=>'Kerjakan CRUD Laravel'
        ]);
    }
}
