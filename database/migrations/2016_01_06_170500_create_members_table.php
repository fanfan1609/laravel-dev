<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMembersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('members',function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('username');
            $table->string('first');
            $table->string('last');
            $table->string('email');
            $table->string('avatar')->nullable();
            $table->string('signature')->nullable();
            $table->timestamp('joined');
            $table->string('quote')->nullable();
            $table->bigInteger('group');
            $table->timestamp('last_login')->nullable();
            $table->string('pw_hash');
            $table->boolean('banned')->default(false);
            $table->string('banned_reason')->nullable();
            $table->timestamp('banned_time')->nullable();
            $table->timestamp('paid_member_expire')->nullable();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('members');
    }
}
