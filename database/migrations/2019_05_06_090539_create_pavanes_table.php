<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePavanesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pavanes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('pavane_type_id');
            $table->string('label');
            $table->timestamps();
            $table->foreign('pavane_type_id')->references('id')->on('pavane_types');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pavanes');
    }
}
