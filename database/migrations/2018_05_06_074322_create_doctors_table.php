<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDoctorsTable extends Migration
{

    public function up()
    {
        Schema::create('doctors', function (Blueprint $table) {
            $table->increments('id');
            $table->text('name');
            $table->text('degree');
            $table->text('speciality');
            $table->text('hospital')->nullable();
            $table->text('city');
            $table->text('area')->nullable();
            $table->text('helpline')->nullable();
            $table->timestamps();
        });
    }


    public function down()
    {
        Schema::dropIfExists('doctors');
    }
}
