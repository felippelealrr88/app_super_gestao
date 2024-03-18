<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class AlterTableSiteContatosAddFkMotivoContatos extends Migration
{
    
    public function up()
    {
        //Cria a nova coluna na tabela site_contatos
        Schema::table('site_contatos', function(Blueprint $table){
            $table->unsignedBigInteger('motivo_contatos_id'); 
        });

        //A nova coluna recebe os valores da antiga coluna motivo_contato
        DB::statement('update site_contatos set motivo_contatos_id = motivo_contato');

        //Criando a chave estrangeira na tabela site_contatos apontando para id de motivo_contatos
        Schema::table('site_contatos', function(Blueprint $table){
            $table->foreign('motivo_contatos_id')->references('id')->on('motivo_contatos');
        });

        //Remove a antiga coluna motivo_contato
        Schema::table('site_contatos', function(Blueprint $table){
            $table->dropColumn('motivo_contato');
        });
    }

    
    public function down()
    {
     //Cria a coluna motivo_contato
     Schema::table('site_contatos', function(Blueprint $table){
        $table->integer('motivo_contato');
    });
    
    //Remove a chave estrangeira na tabela site_contatos
    Schema::table('site_contatos', function(Blueprint $table){
        $table->dropForeign('site_contatos_motivo_contatos_id_foreign');
    });

    //A antiga coluna recebe os valores da nova coluna motivo_contato
    DB::statement('update site_contatos set motivo_contato = motivo_contatos_id');

    // Remove a coluna na tabela site_contatos
    Schema::table('site_contatos', function(Blueprint $table){
        $table->dropColumn('motivo_contatos_id'); 
    });
    
        
    }
}
