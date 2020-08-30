<?php

use Illuminate\Database\Seeder;

class QuestionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('questions')->insert([
        	'question'=>'kapan jamkos?',
        	'users_id'=>'1',
        	'subject'=>'bebas',
        	'answer'=>'bebas'
        ]);
    }
}
