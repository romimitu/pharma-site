<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMedImagesTable extends Migration
{
    public function up()
    {
        Schema::create('med_images', function (Blueprint $table) {
            $table->increments('id');            
            $table->integer('product_id')->unsigned();
            $table->foreign('product_id')->references('id')->on('products')->onDelete('cascade');
            $table->text('image');
            $table->timestamps();
        });
    }


    public function down()
    {
        Schema::dropIfExists('med_images');
    }
}
