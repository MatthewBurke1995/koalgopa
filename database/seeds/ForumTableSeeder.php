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
        'postText' => "SEOUL, May 2 (Yonhap) -- Police said Wednesday they have summoned a ruling party lawmaker for questioning later this week over alleged involvement in a massive rigging of Internet comments in news articles about President Moon Jae-in.

Rep. Kim Kyoung-soo of the Democratic Party has been asked to appear for an interrogation on Friday, the Seoul Metropolitan Police Agency said.

Kim, a close aide of the president, is at the center of a ballooning scandal involving an influential power blogger who has been arrested and charged over manipulating Internet comments using a computer program early this year.


        아무말대잔치 아무말대잔치
        https://www.naver.com/
        <script> alert('ALERT') </script>",
        'name' => "Matthew",
        ]);


        DB::table('forumposts')->insert([
          'postTitle' => "Second post",
          'postText' => "SEOUL, May 2 (Yonhap) -- Police said Wednesday they have summoned a ruling party lawmaker for questioning later this week over alleged involvement in a massive rigging of Internet comments in news articles about President Moon Jae-in.

Rep. Kim Kyoung-soo of the Democratic Party has been asked to appear for an interrogation on Friday, the Seoul Metropolitan Police Agency said.

Kim, a close aide of the president, is at the center of a ballooning scandal involving an influential power blogger who has been arrested and charged over manipulating Internet comments using a computer program early this year.

",
          'name' => "Matthew",
          ]);



    }
}
