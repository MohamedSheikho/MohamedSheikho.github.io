<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEDatasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('e_datas', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('exhibit_id')->unsigned();
            $table->timestamps();
        });
        Schema::table('e_datas', function($table) {
            $table->foreign('exhibit_id')->references('id')->on('exhibits');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('e_datas');
    }
}
