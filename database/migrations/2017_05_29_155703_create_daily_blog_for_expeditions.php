<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDailyBlogForExpeditions extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('daily_blog', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title', 255);
            $table->string('lead', 1000)->nullable();
            $table->string('ico', 255)->nullable();
            $table->text('text');
            $table->datetime('date');
            $table->integer('expedition_id')->unsigned();
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
        Schema::dropIfExists('daily_blog');
    }
}
