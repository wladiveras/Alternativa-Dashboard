<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAltCardsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alt_cards', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->nullable();
            $table->string('css')->nullable();
            $table->string('model')->nullable();
            $table->string('preview')->nullable();
            $table->integer('isBack')->nullable()->default(0);
            $table->dateTime('datetime')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('alt_cards');
    }
}
