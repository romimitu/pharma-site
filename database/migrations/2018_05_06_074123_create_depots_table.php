<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDepotsTable extends Migration
{
    public function up()
    {
        Schema::create('depots', function (Blueprint $table) {
            $table->increments('id');
            $table->text('branch');
            $table->text('address');
            $table->text('phone');
            $table->text('email')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('depots');
    }
}
