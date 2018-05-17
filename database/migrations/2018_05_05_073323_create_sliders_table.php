<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSlidersTable extends Migration
{
    public function up()
    {
        Schema::create('sliders', function (Blueprint $table) {
            $table->increments('id');
            $table->text('title');
            $table->text('image');
            $table->timestamps();
        });
    }


    public function down()
    {
        Schema::dropIfExists('sliders');
    }
}
