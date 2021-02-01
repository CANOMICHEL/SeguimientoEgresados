<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJobsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jobs', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('graduated_id')->unsigned();
            $table->string('institution');
            $table->string('activity_name');
            $table->string('position');
            $table->string('institution_type');
            $table->string('institution_heading');
            $table->string('description');
            $table->date('start_date');
            $table->date('end_date')->nullable;
            $table->timestamps();
            $table->foreign('graduated_id')->references('id')->on('graduates');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('jobs');
    }
}
