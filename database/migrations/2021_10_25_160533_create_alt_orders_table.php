<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAltOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alt_orders', function (Blueprint $table) {
            $table->increments('id');
            $table->string('order_id')->comment('ID do pedido');
            $table->string('order_link')->comment('Link da proposta');
            $table->string('salesman')->nullable()->comment('Vendedor');
            $table->string('username')->comment('Proprietario');
            $table->string('title')->nullable()->comment('titulo do pedido');
            $table->string('description')->nullable()->comment('descrição do pedido');
            $table->string('code')->nullable()->default('0')->comment('Se tem algum tipo de codigo(QRCODE)');
            $table->string('coding')->nullable()->comment('tipo de codigo');
            $table->integer('limit')->comment('Limite de dados');
            $table->integer('limit_count')->nullable()->default(0)->comment('contagem do limite');
            $table->integer('id_front')->default(0)->comment('id do modelo de cartão frente');
            $table->integer('id_back')->nullable()->default(0)->comment('id do modelo de cartão verso');
            $table->string('card_front')->nullable()->default('')->comment('diretorio do verso
');
            $table->string('card_back')->default('')->comment('diretorio da frente');
            $table->integer('prompt')->nullable()->default(0)->comment('prazo de entrega após aprovar');
            $table->string('token')->nullable()->comment('Token de Acesso');
            $table->dateTime('approved_at')->nullable()->comment('data que foi aprovado');
            $table->dateTime('created_at')->nullable()->comment('data que foi criado');
            $table->dateTime('renew_at')->nullable()->comment('data que foi refeito o pedido');
            $table->dateTime('ready_at')->nullable()->comment('data que o pedido foi concluido pela produção');
            $table->dateTime('expire_at')->nullable()->comment('data que expíra a aprovação');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('alt_orders');
    }
}
