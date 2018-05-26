<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddCompanySummaryView extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

    DB::statement('CREATE VIEW company_agg AS
      SELECT c1.companyid, c1.companyTitle, c1.companyImage, ROUND(AVG(c2.companyreviewStars),1) AS stars,ROUND(AVG(c2.companyreviewWage),1) AS wage , COUNT(c2.companyreviewid) as reviews,
      (SELECT c3.companyreviewPros FROM company_reviews AS c3 WHERE c3.companyreviewid = (SELECT MAX(companyreviewid) FROM company_reviews WHERE companyid=c1.companyid)) as pros,
      (SELECT c4.companyreviewCons FROM company_reviews AS c4 WHERE c4.companyreviewid = (SELECT MAX(companyreviewid) FROM company_reviews WHERE companyid=c1.companyid)) as cons
      FROM companies AS c1
      LEFT JOIN company_reviews as c2
      ON c1.companyid = c2.companyid GROUP BY c1.companyid');





        //    DB::statement('CREATE VIEW company_agg AS
      //        SELECT c1.companyid, c1.companyTitle, c1.companyImage, ROUND(AVG(c2.companyreviewStars),1) AS stars,ROUND(AVG(c2.companyreviewWage),1) AS wage , COUNT(c2.companyreviewid) as reviews, MAX(c2.companyreviewPros) as pros, MAX(c2.companyreviewCons) as cons
      //        FROM companies AS c1
    //          LEFT JOIN company_reviews as c2
  //            ON c1.companyid = c2.companyid GROUP BY c1.companyid');


  }


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::statement('DROP VIEW company_agg');
      }
}
