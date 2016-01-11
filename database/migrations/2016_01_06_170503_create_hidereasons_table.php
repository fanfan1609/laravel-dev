<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHidereasonsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hide_reasons', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('reason');
            $table->string('description');
            $table->index('reason');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('hide_reasons');
    }
}
