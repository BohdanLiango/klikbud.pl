<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKlikbudOpinionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('klikbud_opinion', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->integer('service_id')->unsigned()->nullable();
            $table->tinyInteger('stars')->unsigned()->nullable();
            $table->tinyInteger('status_to_main_page_id')->unsigned()->default(2); // 1 - Active in main page 2 - Hidden
            $table->tinyInteger('is_new_id')->unsigned()->default(false); // New where client send new opinion in site
            $table->integer('reader_id')->nullable(); //If status is new id
            $table->integer('portal_opinion_id')->unsigned()->default(NULL);
            $table->integer('user_id')->unsigned()->nullable();
            $table->integer('moderated_id')->default(3);
            $table->mediumText('opinion')->nullable();
            $table->dateTime('date_add')->nullable();
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
        Schema::dropIfExists('klikbud_opinion');
    }
}
