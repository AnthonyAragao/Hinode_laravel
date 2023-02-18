<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('relatorio_vendas', function (Blueprint $table) {
            $table->id();
            $table->string('nome');
            $table->double('valor_pago');
            $table->string('data_compra');
            $table->string('descricao');
            $table->foreignId('produto_id')->constrained('produtos');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down(){
        Schema::dropIfExists('relatorio_vendas');
    }
};
