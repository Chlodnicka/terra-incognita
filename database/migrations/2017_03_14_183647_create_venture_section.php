<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVentureSection extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('venture_sections', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title', 255);
            $table->string('lead', 1000)->nullable();
            $table->string('ico', 255)->nullable();
            $table->text('text');
            $table->datetime('date')->nullable;
            $table->integer('ventures_id')->unsigned();
            $table->foreign('ventures_id')->references('id')->on('ventures');
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
        Schema::dropIfExists('venture_sections');
    }
}
