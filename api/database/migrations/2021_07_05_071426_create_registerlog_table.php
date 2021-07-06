<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRegisterlogTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('registerlogs', function (Blueprint $table) {
            $table->id('registerlogs_id');
            $table->string('register_name');
            $table->string('register_username');
            $table->string('register_password');
            $table->string('register_email');
            $table->string('register_address');
            $table->string('register_img');
            $table->string('register_type');
            $table->string('register_verification_code');
            $table->string('register_ip_address');
            $table->string('register_device');
            $table->string('register_status');
            $table->dateTime('register_date_end');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('registerlog');
    }
}
