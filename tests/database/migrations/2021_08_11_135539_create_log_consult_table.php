<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLogConsultTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('log_consult', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->string('type', 50)->nullable();
            $table->string('input')->nullable();
            $table->date('date')->nullable();
            $table->string('checked')->nullable()->default('0');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('log_consult');
    }
}
