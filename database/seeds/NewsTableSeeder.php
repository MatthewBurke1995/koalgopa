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
        'articleTitle' => "실제로 호주 워홀러들이 얼마나 벌고 계신가?",
        'articleText' => '지금 기준으로 (2018년 5월) 호주 시급은 $18.29이지만 지난 해에 UNSW 연구 결과 따르면 최저시급조차 못 버는 워홀러는 다수입니다. 몇백명 워홀러들을 대규모 조사한 끝에 어떤 일 하느냐 어디서 일하느냐 혹은 영어 실력 수준 따라서 페이 얼마나 갈려있는지 풋풋히 알려줍니다.

',
        'author' => "Matthew",
        ]);

    }
}
