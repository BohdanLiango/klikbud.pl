<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKlikbudServiceTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('klikbud_service', function (Blueprint $table) {
            $table->id();
            $table->integer('status_to_main_page_id')->default(2); // In main page 1
            $table->bigInteger('image_id')->nullable();
            $table->bigInteger('user_id')->nullable();
            $table->integer('moderated_id')->default(3);
            $table->json('slug')->nullable();
            $table->json('alt')->nullable();
            $table->json('title')->nullable();
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
        Schema::dropIfExists('klikbud_service');
    }
}
