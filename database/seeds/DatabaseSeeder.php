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
         $this->call(UsersTableSeeder::class);
         $this->call(ForumTableSeeder::class);
         $this->call(InterviewTableSeeder::class);
         $this->call(NewsTableSeeder::class);
         $this->call(HeadlinesTableSeeder::class);
         $this->call(CompaniesTableSeeder::class);
         $this->call(Company_reviewsTableSeeder::class);


    }
}
