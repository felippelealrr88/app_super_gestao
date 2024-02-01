<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Fornecedor extends Model
{
    //Atributo que sobrepõe a nomeação automática do Laravel
    protected $table = 'fornecedores';
}
