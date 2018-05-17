<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAboutsTable extends Migration
{
    public function up()
    {
        Schema::create('abouts', function (Blueprint $table) {
            $table->increments('id');
            $table->text('logo')->nullable();
            $table->text('slogan')->nullable();
            $table->string('home_about');
            $table->text('about');
            $table->text('mission');
            $table->text('vision');
            $table->text('objective');
            $table->text('growth');
            $table->text('about_image')->nullable();
            $table->text('mission_image')->nullable();
            $table->text('growth_image')->nullable();
            $table->string('address');
            $table->text('facebook');
            $table->text('twitter');
            $table->text('linkedin');
            $table->text('email');
            $table->text('mobile');
            $table->text('fax');
            $table->text('map');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('abouts');
    }
}
