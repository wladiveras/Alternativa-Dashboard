<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNotificationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('notification', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('sender_id')->nullable();
            $table->integer('receiver_id')->nullable();
            $table->integer('type')->nullable()->default(0);
            $table->string('value')->nullable();
            $table->string('link')->nullable();
            $table->dateTime('date')->nullable();
            $table->integer('checked')->nullable()->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('notification');
    }
}
