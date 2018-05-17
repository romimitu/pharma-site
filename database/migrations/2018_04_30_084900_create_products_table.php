<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->increments('id');
            $table->string('trade_name');
            $table->text('generic_name');
            $table->text('therapeutic_class');
            $table->text('indication');
            $table->text('dosage_administration')->nullable();
            $table->text('preparation')->nullable();
            $table->text('prescribing_file')->nullable();
            $table->timestamps();
        });
    }


    public function down()
    {
        Schema::dropIfExists('products');
    }
}
