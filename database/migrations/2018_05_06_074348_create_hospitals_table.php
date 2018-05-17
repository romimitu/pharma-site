<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHospitalsTable extends Migration
{

    public function up()
    {
        Schema::create('hospitals', function (Blueprint $table) {
            $table->increments('id');
            $table->text('name');
            $table->text('address');
            $table->text('helpline')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('hospitals');
    }
}
