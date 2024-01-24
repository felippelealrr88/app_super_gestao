<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlterFornecedoresNovasColunas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() //Metodo que execura a migração
    {
        //Atualiza uma tabela já existente no banco
        Schema::table('fornecedores', function (Blueprint $table) {
            $table->string('uf', 2);
            $table->string('email', 150);    
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //Desfaz a ultima atualização da migration desde que configurada
        Schema::table('fornecedores', function (Blueprint $table) {
            //para remover colunas
            $table->dropColumn('uf', 'email');    
        });
    }
}
