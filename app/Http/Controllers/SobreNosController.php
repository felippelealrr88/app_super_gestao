<?php

namespace App\Http\Controllers;


class SobreNosController extends Controller
{

    //Usando o Middleware definido em Kernel.php pelo apelido
    public function __construct()
    {
       $this->middleware('log.acesso'); 
    }
    public function sobreNos(){
        return view('site.sobre-nos');
    }
}
