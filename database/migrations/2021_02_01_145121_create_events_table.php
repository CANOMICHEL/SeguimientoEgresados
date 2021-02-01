<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('events', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('graduated_id')->unsigned();
            $table->string('type');
            $table->string('event_name');
            $table->string('condition');
            $table->string('description');
            $table->string('institution');
            $table->date('start_date');
            $table->date('end_date');
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
        Schema::dropIfExists('events');
    }
}
