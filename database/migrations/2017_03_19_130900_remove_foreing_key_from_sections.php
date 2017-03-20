<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class RemoveForeingKeyFromSections extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('venture_sections', function (Blueprint $table) {
            $table->dropForeign('venture_sections_ventures_id_foreign');
            $table->dropColumn('ventures_id');
            $table->integer('expedition_id')->unsigned();
            $table->foreign('expedition_id')->references('id')->on('expeditions');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('venture_sections', function (Blueprint $table) {
            $table->dropForeign('expedition_sections_expeditions_id_foreign');
            $table->dropColumn('expedition_id');
            $table->integer('ventures_id')->unsigned();
            $table->foreign('ventures_id')->references('id')->on('ventures');
        });
    }
}


