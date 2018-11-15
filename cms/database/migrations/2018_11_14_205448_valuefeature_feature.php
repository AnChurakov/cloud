<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ValuefeatureFeature extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('valuefeature_features', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('features_id')->length(10)->unsigned();
            $table->foreign('features_id')->references('id')->on('features');
            $table->integer('value_features_id')->length(10)->unsigned();
            $table->foreign('value_features_id')->references('id')->on('value_features');
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
        //
    }
}
