<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
         $this->call(RolesSeeder::class);
         
         $this->call(ClassSeeder::class);
         
         $this->call(create_users_seeder::class);

         $this->call(TeachersSeeder::class);

         $this->call(SubjectsSeeder::class);
         
         // $this->call(AnnouncementsSeeder::class);
         
         // $this->call(QuestionsSeeder::class);

         $this->call(StudentsSeeder::class);

    }
}
