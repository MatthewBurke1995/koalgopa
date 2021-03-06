<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCompanyReviewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('company_reviews', function (Blueprint $table) {
            $table->increments('companyreviewid');
            $table->integer('companyid');
            $table->integer('companyreviewStars');
            $table->text('companyreviewPros');
            $table->text('companyreviewCons');
            $table->string('companyreviewComment', 255)->nullable()->default('없음');
            $table->integer('companyreviewWage')->nullable();
            $table->timestamp('companyreviewCreatedTime')->useCurrent();
        });
    }


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('company_reviews');
    }
}
