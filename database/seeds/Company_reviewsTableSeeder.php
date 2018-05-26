<?php

use Illuminate\Database\Seeder;

class Company_reviewsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('company_reviews')->insert([
            'companyid' => "1",
            'companyreviewStars' => "5",
            'companyreviewPros' => "-Westfarmers Group 가게에서 5프로 할인 받을 수 있고
-근무시간 유연하고
-시급 좋고",

            'companyreviewCons' => "-가게 크지 않으면 거의 혼자서만 일하고
- 승진 기회 별로 없고
- 캐즈얼 계약이면 어떨 때 일주일에 3시간 일하고 어떨 때 25시간 일해",

            'companyreviewComment' => "",
            'companyreviewWage' => "21"

          ]);

          DB::table('company_reviews')->insert([
              'companyid' => "1",
              'companyreviewStars' => "5",
                'companyreviewPros' => "-Coles 관련 가게에서 5% 할인
-다른 가게로 쉽게 전환할 수 있어",
              'companyreviewCons' => "- Casual이면 어떨 때 일주일에 3시간 일하고 어떨 때 25시간 일해",
              'companyreviewComment' => "매니저만 좋으면 일하기 편해",
              'companyreviewWage' => "21"

            ]);



            DB::table('company_reviews')->insert([
                'companyid' => "2",
                'companyreviewStars' => "2",
                'companyreviewPros' => "바빠서 시간 금방 가더라",
                'companyreviewCons' => "-아침에 손님 줄 서가지고 오프닝부터 바쁜데
-시작할 때 시급 16불밖에 안 돼 ",
                'companyreviewComment' => "바쁘게 일하고 싶지 않은 이상 추천할 수 없어. 금방 일 그만 두는 사람 많아서 그것도 단점 일 수도 있다",
                'companyreviewWage' => "16",

              ]);

    }
}
