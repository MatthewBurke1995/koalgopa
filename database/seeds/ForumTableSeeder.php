<?php

use Illuminate\Database\Seeder;

class ForumTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('forumposts')->insert([
        'postTitle' => "첫번째 포스트",
        'postText' => "안녕하세요

아무말대잔치 아무말대잔치
https://www.naver.com/
<script> alert('ALERT') </script>",
        'name' => "Matthew",
        ]);


        DB::table('forumposts')->insert([
          'postTitle' => "Second post",
          'postText' => "English text Englist text",
          'name' => "Matthew",
          ]);


      DB::table('comments')->insert([
        'postid' => 1,
        'commentText' => "안녕하세요
아무말대잔치 아무말대잔치",
        'name' => "Matthew",
        ]);


    }
}
