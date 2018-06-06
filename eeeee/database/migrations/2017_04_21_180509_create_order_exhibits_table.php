<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrderExhibitsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order_exhibits', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('exhibit_id')->unsigned();
            $table->integer('order_id')->unsigned();
            $table->timestamps();
        });
        Schema::table('order_exhibits', function($table) {
            $table->foreign('exhibit_id')->references('id')->on('exhibits');
            $table->foreign('order_id')->references('id')->on('orders');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('order_exhibits');
    }
}
