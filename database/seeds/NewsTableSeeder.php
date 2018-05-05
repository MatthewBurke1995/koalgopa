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
        'articleText' => "안녕하세요 Develop simple cost analysis and monitoring models to be used by staff members from non-financial disciplines. Review, analyse and evaluate business systems from internal and external data and compile costings structures and pricing modelling/frameworks.

Research and prepare evidence-based advice in the forms of briefs, policy and discussion papers to contribute to managerial requests.


아무말 대잔치 <b> 아무말 대잔치 </b>
<a href='http://endic.naver.com/?sLn=en'> naver </a>",
        'author' => "Matthew",
        ]);

    }
}
