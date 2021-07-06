<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStatsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stats', function (Blueprint $table) {
            $table->id('stats_id');
            $table->integer('Blog_id');
            $table->string('ip_address');
            $table->string('countries');
            $table->string('alpha_2');
            $table->string('alpha_3');
            $table->string('device');
            $table->string('status_login');
            $table->dateTime('date_login');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('stats');
    }
}
