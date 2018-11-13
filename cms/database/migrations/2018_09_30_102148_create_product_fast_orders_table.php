<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductFastOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_fast_orders', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('product_id')->length(10)->unsigned();
            $table->foreign('product_id')->references('id')->on('products');
            $table->integer('fastorder_id')->length(10)->unsigned();
            $table->foreign('fastorder_id')->references('id')->on('fast_orders');
           
           
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('product_fast_orders');
    }
}
