<?php

use Illuminate\Database\Seeder;

class InterviewTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('interviews')->insert([
      'interviewTitle' => "첫번째 인터뷰",
      'interviewText' => "인터뷰 안녕하세요



<b> Q. 아무말대잔치 아무말대잔치</b>

댑답 댑답 댑답 댑답 댑답 댑답 댑답 댑답 댑답 댑답 댑답 댑답 댑답 댑답 댑답 댑답 댑답 댑답 댑답 댑답 댑답 댑답 댑답 댑답 댑답 댑답 댑답 댑답 댑답 댑답 댑답 댑답
댑답 댑답 댑답 댑답 댑답 댑답 댑답 댑답 댑답 댑답 댑답 댑답 댑답 댑답 댑답 댑답 댑답 댑답 댑답 댑답 댑답 댑답 댑답 댑답 댑답 댑답 댑답 댑답.
<a href='http://endic.naver.com/?sLn=en'> naver </a>",
      'author' => "Matthew",
      ]);

    }
}
