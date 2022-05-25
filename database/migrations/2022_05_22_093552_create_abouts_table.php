<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAboutsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('abouts', function (Blueprint $table) {
            $table->increments('id');
            $table->string('topl_image');
            $table->string('topr_image');
            $table->string('downl_image');
            $table->string('downr_image');
            $table->longText('topr_desc');
            $table->longText('bottom_desc');
            $table->longText('mission_desc');
            $table->string('mission_image');
            $table->longText('vision_desc');
            $table->string('vision_image');
            $table->longText('value_desc');
            $table->string('value_image');
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
        Schema::dropIfExists('abouts');
    }
}
