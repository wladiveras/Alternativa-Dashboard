<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAltOrdersDataTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alt_orders_data', function (Blueprint $table) {
            $table->increments('id');
            $table->string('order_id');
            $table->string('code')->nullable()->default('');
            $table->string('front_avatar')->nullable()->default('');
            $table->string('front_art')->nullable();
            $table->string('back_art')->nullable();
            $table->string('front_input1')->nullable()->default('');
            $table->string('front_input2')->nullable()->default('');
            $table->string('front_input3')->nullable()->default('');
            $table->string('front_input4')->nullable()->default('');
            $table->string('front_input5')->nullable();
            $table->string('front_input6')->nullable();
            $table->string('front_input7')->nullable();
            $table->string('front_input8')->nullable();
            $table->string('back_input1')->nullable();
            $table->string('back_input2')->nullable()->default('');
            $table->string('back_input3')->nullable()->default('');
            $table->string('back_input4')->nullable()->default('');
            $table->string('back_input5')->nullable()->default('');
            $table->string('back_input6')->nullable()->default('');
            $table->string('back_input7')->nullable()->default('');
            $table->string('back_input8')->nullable();
            $table->dateTime('created_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('alt_orders_data');
    }
}
