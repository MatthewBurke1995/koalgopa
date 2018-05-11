<?php

use Illuminate\Database\Seeder;

class HeadlinesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

      DB::table('headlines')->insert([
        'headlineTitle' => "Budget cuts are an attempt to bully the ABC into silence",
        'headlineURL' => "https://www.theguardian.com/commentisfree/2018/may/10/budget-cuts-are-an-attempt-to-bully-the-abc-into-silence",
        'headlineDomain' => "theguardian.com",
        ]);



    }
}
