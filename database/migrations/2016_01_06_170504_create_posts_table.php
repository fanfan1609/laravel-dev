<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function( Blueprint $table){
            $table->bigIncrements('id');
            $table->bigInteger('member_id')->unsigned();
            $table->string('title');
            $table->text('content');
            $table->bigInteger('topic')->unsigned();
            $table->bigInteger('response_to_post');
            $table->timestamp('timestamp');
            $table->boolean('pinned')->default(false);
            $table->boolean('self_deleted')->default(false);
            $table->timestamp('self_deleted_time')->nullable();
            $table->boolean('locked')->default(false);
            $table->timestamp('locked_time')->nullable();
            $table->string('locked_reason')->nullable();
            $table->string('source')->nullable();
            $table->string('read_more')->nullable();
            $table->boolean('hidden')->default(false);


            $table->index('id');
            $table->index('member_id');
        });

        Schema::table('posts', function($table) {
            $table->foreign('member_id')->references('id')->on('members')->onDelete('cascade');
            $table->foreign('topic')->references('id')->on('topics')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('posts');
    }
}
