<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateIpsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ips',function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('ipv4');
            $table->string('ipv6');
            $table->bigInteger('member_id')->unsigned();
            $table->timestamp('last_seen');
            $table->boolean('banned')->default(false);
            $table->string('banned_reason')->nullable();
            $table->timestamp('banned_time')->nullable();
            $table->index('member_id');
        });

        Schema::table('ips',function (Blueprint $table) {
            $table->foreign('member_id')->references('id')->on('members')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('ips');
    }
}
