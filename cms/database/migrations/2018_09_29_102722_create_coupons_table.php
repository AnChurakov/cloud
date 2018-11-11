<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCouponsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('coupons', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('category_id')->length(10)->unsigned()->nullable();
            $table->foreign('category_id')->references('id')->on('categories');
            $table->integer('subcategory_id')->length(10)->unsigned()->nullable();
            $table->foreign('subcategory_id')->references('id')->on('sub_categories');
            $table->integer('product_id')->length(10)->unsigned()->nullable();
            $table->foreign('product_id')->references('id')->on('products');
            $table->string('name');
            $table->string('procent');
            $table->dateTime('date');
            $table->string('status');
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
        Schema::dropIfExists('coupons');
    }
}
