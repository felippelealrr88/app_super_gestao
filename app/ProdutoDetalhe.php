<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProdutoDetalhe extends Model
{
   //Atributo que sobrepõe a nomeação automática do Laravel no banco
   protected $table = 'produto_detalhes';
    
   //Permissão para inserir dados no Objeto usando Tinker
   protected $fillable = ['produto_id', 'comprimento', 'largura', 'altura', 'unidade_id'];
}

/*Model serve para fazer o mapeamento Objeto Relacional
   ou seja, manipular os objetos da aplicação no banco de maneira facilitada
   
   Regra Eloquent nome de Classe e tabela no banco
   1 - SiteContato   ->separação por underline _
   2 - Site_Contato ->conversão em minúsculas
   3 - site_contatos ->conversão em plural (s)
   
   */

