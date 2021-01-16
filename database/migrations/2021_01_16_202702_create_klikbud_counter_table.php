<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKlikbudCounterTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('klikbud_counter', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('project_completed')->nullable();
            $table->bigInteger('happy_clients')->nullable();
            $table->bigInteger('workers_employed')->nullable();
            $table->bigInteger('awards_won')->nullable();
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
        Schema::dropIfExists('klikbud_counter');
    }
}
