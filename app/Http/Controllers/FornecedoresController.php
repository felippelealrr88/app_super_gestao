<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FornecedoresController extends Controller
{
    public function index(){
        $fornecedores = [
            0 =>['nome'=>'Casa do Pão de Queijo', 'status'=>'ativo', 'cnpj'=>'61.851.929/0001-19'],
            1 =>['nome'=>'Casa do Camarão',  'cnpj'=>'22.441.389/0001-43']
        ];
                return view('app.fornecedores.index', compact('fornecedores'));
    }
}
