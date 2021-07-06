<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id('users_id');
            $table->string('users_name');
            $table->string('users_username');
            $table->string('users_password');
            $table->string('users_email');
            $table->string('users_address');
            $table->string('users_img');
            $table->string('users_type');
            $table->string('users_token');
            $table->string('users_status');
            $table->dateTime('users_date_edit');
            $table->dateTime('users_date_create');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
