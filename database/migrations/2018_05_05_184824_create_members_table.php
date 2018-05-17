<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMembersTable extends Migration
{
    
    public function up()
    {
        Schema::create('members', function (Blueprint $table) {
            $table->increments('id');
            $table->text('name');
            $table->text('designation');
            $table->text('details');
            $table->text('image');
            $table->timestamps();
        });
    }


    public function down()
    {
        Schema::dropIfExists('members');
    }
}
