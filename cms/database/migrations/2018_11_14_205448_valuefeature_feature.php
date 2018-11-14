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
        Schema::create('valuefeature_feature', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('feature_id')->length(10)->unsigned();
            $table->foreign('feature_id')->references('id')->on('feature');
            $table->integer('value_feature_id')->length(10)->unsigned();
            $table->foreign('value_feature_id')->references('id')->on('value_feature');
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
