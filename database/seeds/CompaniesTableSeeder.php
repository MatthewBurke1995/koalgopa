<?php

use Illuminate\Database\Seeder;

class CompaniesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('companies')->insert([
        'companyTitle' => "Coles",
        'companyImage' => "coles.jpg"
        ]);

      DB::table('companies')->insert([
        'companyTitle' => "Once Upon A Time",
        'companyImage' => "onceuponatime.jpg"
        ]);


    }
}
