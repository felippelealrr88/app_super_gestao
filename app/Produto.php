<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    //Atributo que sobrepõe a nomeação automática do Laravel no banco
    protected $table = 'produtos';
    
    //Permissão para inserir dados no Objeto usando Tinker
    protected $fillable = ['nome', 'descricao', 'peso', 'unidade_id'];
}

/*Model serve para fazer o mapeamento Objeto Relacional
    ou seja, manipular os objetos da aplicação no banco de maneira facilitada
    
    Regra Eloquent nome de Classe e tabela no banco
    1 - SiteContato   ->separação por underline _
    2 - Site_Contato ->conversão em minúsculas
    3 - site_contatos ->conversão em plural (s)
    
    */

