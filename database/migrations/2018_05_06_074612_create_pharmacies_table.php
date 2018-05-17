<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePharmaciesTable extends Migration
{

    public function up()
    {
        Schema::create('pharmacies', function (Blueprint $table) {
            $table->increments('id');
            $table->text('name');
            $table->text('address');
            $table->text('helpline')->nullable();
            $table->timestamps();
        });
    }


    public function down()
    {
        Schema::dropIfExists('pharmacies');
    }
}
