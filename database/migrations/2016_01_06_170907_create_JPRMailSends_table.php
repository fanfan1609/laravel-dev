<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJPRMailSendsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('JPR_mail_sends',function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('mail_id')->unsigned();
            $table->bigInteger('to')->unsigned();
            $table->timestamp('opened');
            $table->index('mail_id');
            $table->index('to');
        });

        Schema::table('JPR_mail_sends',function (Blueprint $table) {
            $table->foreign('mail_id')->references('id')->on('JPR_mails')->onDelete('cascade');
            $table->foreign('to')->references('id')->on('members')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('JPR_mail_sends');
    }
}
