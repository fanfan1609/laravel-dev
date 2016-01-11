<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostEditsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('post_edits', function(Blueprint $table){
            $table->bigIncrements('id');
            $table->bigInteger('post_id')->unsigned();
            $table->string('title');
            $table->text('content');
            $table->string('reason');
            $table->timestamp('timestamp');


            $table->index('id');
            $table->index('post_id');
        });

        Schema::table('post_edits', function(Blueprint $table){
            $table->foreign('post_id')->references('id')->on('posts')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('post_edits');
    }
}
