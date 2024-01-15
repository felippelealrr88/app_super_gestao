<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FornecedoresController extends Controller
{
    public function index(){
        $fornecedores = [
            0 =>['nome'=>'Casa do Pão de Queijo', 'status'=>'ativo', 'cnpj'=>'61.851.929/0001-19'],
            1 =>['nome'=>'Casa do Camarão', 'status'=>'ativo', 'cnpj'=>'']
        ];

//Operador condicional ternário em PHP (condção ? se verdade : se falso;)
echo isset($fornecedores[1]['cnpj']) ? 'CNPJ informado' : 'CNPJ não informado';


                return view('app.fornecedores.index', compact('fornecedores'));
    }
}
