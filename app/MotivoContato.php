<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

//Gerenciamento da tablela no banco
class MotivoContato extends Model
{
    //Criando a varíavel que poderá ser preenchida em massa
    protected $fillable = ['motivo_contato'];
}
