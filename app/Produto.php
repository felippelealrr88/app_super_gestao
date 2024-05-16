<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    //Atributo que sobrepõe a nomeação automática do Laravel no banco
    protected $table = 'produtos';
    
    //Permissão para inserir dados no Objeto usando Tinker
    protected $fillable = ['nome', 'descricao', 'peso', 'unidade_id', 'fornecedor_id'];

    //Função que cria o relacionamento 1x1 com produto_detalhes no banco
    public function produtoDetalhe()
    {
        //Classe Produto() tem um ProdutoDetalhe
        return $this->hasOne('App\ProdutoDetalhe');
        //Aponta para o Model ProdutoDetalhe
        //Faz uma busca na tabela produto_detalhes por uma chave correspondente com a pk de produtos (fk em produto_detalhes)
    }

    //Classe Produto() tem um fornecedor
    public function fornecedor(){
        return $this->belongsTo('App\Fornecedor');
    }

    //Classe Produto() tem um fornecedor
    public function unidade(){
        return $this->belongsTo('App\Unidade');
    }
}

/*Model serve para fazer o mapeamento Objeto Relacional
    ou seja, manipular os objetos da aplicação no banco de maneira facilitada
    
    Regra Eloquent nome de Classe e tabela no banco
    1 - SiteContato   ->separação por underline _
    2 - Site_Contato ->conversão em minúsculas
    3 - site_contatos ->conversão em plural (s)
    
    */

