<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInvestigationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('investigations', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('graduated_id')->unsigned();
            $table->string('type');
            $table->string('draft_name');
            $table->string('description');
            $table->string('institution');
            $table->date('date');
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
        Schema::dropIfExists('investigations');
    }
}
