<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateExhibitsDescriptionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('exhibits_descriptions', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('exhibits_id')->unsigned();
            $table->string('name');
            $table->string('type');
            $table->timestamps();
        });
        Schema::table('exhibits_descriptions', function($table) {
            $table->foreign('exhibits_id')->references('id')->on('exhibits');
//            $table->foreign('order_id')->references('id')->on('orders');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('exhibits_descriptions');
    }
}
