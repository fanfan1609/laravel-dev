<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJPRMailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('JPR_mails',function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('from_id')->unsigned();
            $table->string('title');
            $table->text('content');
            $table->timestamp('sent');
            $table->bigInteger('response_to');
            $table->index('from_id');
        });

        Schema::table('JPR_mails',function (Blueprint $table) {
            $table->foreign('from_id')->references('id')->on('members')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('JPR_mails');
    }
}
