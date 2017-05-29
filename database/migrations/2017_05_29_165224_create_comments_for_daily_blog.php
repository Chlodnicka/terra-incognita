<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCommentsForDailyBlog extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comments_daily_blog', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nick', 255);
            $table->string('contents', 255);
            $table->datetime('date');
            $table->integer('daily_blog_id')->unsigned();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */

    public function down()
    {
        Schema::dropIfExists('comments_daily_blog');
    }

}
