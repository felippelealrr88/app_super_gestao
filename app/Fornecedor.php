<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Fornecedor extends Model
{
    //Atributo que sobrepõe a nomeação automática do Laravel no banco
    protected $table = 'fornecedores';
    //Permissão para inserir dados no Objeto usando Tinker
    protected $fillable = ['nome', 'site', 'uf', 'email'];
}
