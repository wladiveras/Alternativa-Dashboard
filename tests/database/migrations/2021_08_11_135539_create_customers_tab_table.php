<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCustomersTabTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customers_tab', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->integer('customer_id');
            $table->string('type', 20)->nullable()->default('CPF COMMENT 'tipo');
            $table->string('phone');
            $table->string('status');
            $table->string('resume');
            $table->string('tags');
            $table->dateTime('return_at')->nullable();
            $table->dateTime('created_at')->nullable();
            $table->integer('input1')->nullable();
            $table->integer('input2')->nullable();
            $table->integer('input3')->nullable();
            $table->integer('input4')->nullable();
            $table->integer('input5')->nullable();
            $table->integer('input6')->nullable();
            $table->integer('input7')->nullable();
            $table->integer('input8')->nullable();
            $table->integer('input9')->nullable();
            $table->integer('input10')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('customers_tab');
    }
}
