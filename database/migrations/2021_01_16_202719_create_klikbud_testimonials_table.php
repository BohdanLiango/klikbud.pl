<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKlikbudTestimonialsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('klikbud_testimonials', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->json('testimonial_service')->nullable();
            $table->integer('stars')->nullable();
            $table->integer('status_to_main_page_id')->nullable(); // 1 - Active in main page 2 - Hidden
            $table->bigInteger('user_id')->nullable();
            $table->integer('moderated_id')->nullable();
            $table->json('testimonial')->nullable();
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
        Schema::dropIfExists('klikbud_testimonials');
    }
}
