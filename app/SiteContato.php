<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SiteContato extends Model
{
    /*Model serve para fazer o mapeamento Objeto Relacional
    ou seja, manipular os objetos da aplicação no banco de maneira facilitada
    
    Regra Eloquent nome de Classe e tabela no banco
    1 - SiteContato   ->separação por underline _
    2 - Site_Contato ->conversão em minúsculas
    3 - site_contatos ->conversão em plural (s)
    
    */

    protected $fillable = ['nome', 'telefone', 'email', 'motivo_contatos_id', 'mensagem']; //permissão para poder inserir no Objeto com Tinker
}
