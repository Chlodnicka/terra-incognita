<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContent extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contents', function (Blueprint $table) {
            $table->increments('id');
            $table->string('type', 25)->index();
            $table->string('title', 255);
            $table->string('lead', 1000)->nullable();
            $table->text('text')->nullable();
            $table->datetime('date_start')->nullable();
            $table->datetime('date_finish')->nullable();
            $table->string('string_1', 255)->nullable();
            $table->string('string_2', 255)->nullable();
            $table->string('string_3', 255)->nullable();
            $table->string('long_string_1', 1000)->nullable();
            $table->string('long_string_2', 1000)->nullable();
            $table->integer('int_1')->nullable();
            $table->integer('int_2')->nullable();
            $table->string('geo_place', 255)->nullable();
            $table->string('geo_street', 255)->nullable();
            $table->string('geo_number_1', 255)->nullable();
            $table->string('geo_number_2', 255)->nullable();
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
        Schema::dropIfExists('contents');
    }
}
