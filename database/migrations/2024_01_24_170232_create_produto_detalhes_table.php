<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProdutoDetalhesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('produto_detalhes', function (Blueprint $table) {
            $table->id();
            $table->float('comprimento', 8, 2);
            $table->float('largura', 8, 2);
            $table->float('altura', 8, 2);
            $table->unsignedBigInteger('produto_id'); //chave estrangeira de produtos
            $table->timestamps();

            //constraint que vai fazer a ligação das chaves
            $table->foreign('produto_id')->references('id')->on('produtos');
            $table->unique('produto_id');
            
            //Metodo foreign() passa a FK
            //Metodo references passa a PK
            //Metodo on() especifica a tabela
            //Unique() garante o relacionamento um pra um, garantindo que em produto_id não tenha valores repetidos,
            //ou seja, cada produto tem um detalhe e cada detalhe um produto
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('produto_detalhes');
    }
}
