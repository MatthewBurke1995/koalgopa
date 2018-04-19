<?php

use Illuminate\Database\Seeder;

class NewsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('articles')->insert([
        'articleTitle' => "첫번째 기사",
        'articleText' => "안녕하세요

아무말대잔치 <b>아무말대잔치</b>
<a href='http://endic.naver.com/?sLn=en'> naver </a>",
        'author' => "Matthew",
        ]);

    }
}
