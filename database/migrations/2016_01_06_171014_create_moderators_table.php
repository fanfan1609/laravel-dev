<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateModeratorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('moderators', function(Blueprint $table){
            $table->bigIncrements('id');
            $table->bigInteger('topic_id')->unsigned();
            $table->bigInteger('member_id')->unsigned();
            $table->timestamp('timestamp');

            $table->index('member_id');
            $table->index('topic_id');
        });

        Schema::table('moderators', function(Blueprint $table){
            $table->foreign('member_id')->references('id')->on('members')->onDelete('cascade');
            $table->foreign('topic_id')->references('id')->on('topics')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('moderators');
    }
}
