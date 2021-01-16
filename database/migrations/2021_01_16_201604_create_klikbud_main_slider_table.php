<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKlikbudMainSliderTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('klikbud_main_slider', function (Blueprint $table) {
            $table->id();
            $table->integer('status_to_main_page_id')->nullable(); //  1-active, 2-hidden(but show), 3-disable
            $table->integer('slider_number_show')->nullable(); //1,2,3; 0 - default
            $table->bigInteger('image_id')->nullable(); //id
            $table->bigInteger('user_id')->nullable();
            $table->integer('moderated_id')->nullable();
            $table->json('alt')->nullable();
            $table->json('textYellow')->nullable();
            $table->json('textBlack')->nullable();
            $table->json('description')->nullable();
            $table->softDeletes();
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
        Schema::dropIfExists('klikbud_main_slider');
    }
}
