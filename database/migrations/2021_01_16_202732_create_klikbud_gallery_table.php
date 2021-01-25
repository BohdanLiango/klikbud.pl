<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKlikbudGalleryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('klikbud_gallery', function (Blueprint $table) {
            $table->id();
            $table->integer('object_id')->unsigned()->nullable();
            $table->integer('category_id')->unsigned()->nullable();
            $table->tinyInteger('status_gallery_id')->unsigned()->nullable(); // Status to view gallery
            $table->tinyInteger('status_to_main_page_id')->unsigned()->nullable(); // In main page 1
            $table->integer('image_id')->unsigned()->nullable();
            $table->json('old_images_id')->nullable();
            $table->json('slug')->nullable();
            $table->json('title')->nullable();
            $table->json('description')->nullable();
            $table->json('alt')->nullable();
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
        Schema::dropIfExists('klikbud_gallery');
    }
}
