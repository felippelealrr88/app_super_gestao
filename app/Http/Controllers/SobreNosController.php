<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Middleware\LogAcessoMiddleware;

class SobreNosController extends Controller
{
    public function __construct()
    {
        //Adicionando o middlaware diretamente no construtor
       $this->middleware(LogAcessoMiddleware::class); 
    }
    public function sobreNos(){
        return view('site.sobre-nos');
    }
}
