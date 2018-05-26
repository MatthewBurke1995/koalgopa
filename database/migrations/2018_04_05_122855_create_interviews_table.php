<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInterviewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('interviews', function (Blueprint $table) {
          $table->increments('interviewid');
          $table->string('interviewTitle');
          $table->string('author');
          $table->text('interviewText');
          $table->timestamp('interviewCreatedTime')->useCurrent();
          $table->string('interviewThumbnail')->default('interviewImg/interview.svg');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('interviews');
    }
}
