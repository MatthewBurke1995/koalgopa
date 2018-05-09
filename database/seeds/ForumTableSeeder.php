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
        'postTitle' => "게시판 매너",
        'postText' => "코알고파 계시판에 환영합니다. 지금 보는 계시판 하나밖에 없는 자유 계시판입니다. 여기선 마음대로 자유롭게 얘기 할 수 있지만 단지 불법 자료를 올리지말고 댓글 달 때 좋은 마음으로 달았으면 좋겠습니다.

참고로 사이트 아직은 베타 단계라서 콘텐츠 아이디어 혹은 충고 있으시면 저한테 연락하세요. 이메일 페이지 밑부분에 써있습니다.",
        'name' => "Matthew",
        ]);



    }
}
