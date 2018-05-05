<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateForumpostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::enableForeignKeyConstraints();

        Schema::create('forumposts', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('postid');
            $table->string('postTitle');
            $table->string('name');
            $table->text('postText');
            $table->timestamp('postCreatedTime')->useCurrent();
        });

        Schema::table('forumposts', function (Blueprint $table) {
            $table->foreign('name')->references('name')->on('users')->onDelete('cascade');
;
        });


        Schema::create('comments', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('commentid');
            $table->unsignedInteger('postid');
            $table->string('name');
            $table->text('commentText');
            $table->integer('parentid');

            $table->timestamp('commentCreatedTime')->useCurrent();
        });

        Schema::table('comments', function (Blueprint $table) {
            $table->foreign('postid')->references('postid')->on('forumposts')->onDelete('cascade');
            $table->foreign('name')->references('name')->on('users')->onDelete('cascade');

        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
      Schema::dropIfExists('comments');
      Schema::dropIfExists('forumposts');

    }
}
