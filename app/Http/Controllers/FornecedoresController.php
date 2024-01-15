<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FornecedoresController extends Controller
{
    public function index(){
        $fornecedores = [
            0 =>['nome'=>'Casa do Pão de Queijo',
            'status'=>'ativo',
            'cnpj'=>'61.851.929/0001-19',
            'ddd'=>'11',
            'telefone'=>'99150-2221'],

            1 =>['nome'=>'Casa do Camarão',
            'status'=>'ativo',
            'cnpj'=>'22.441.389/0001-43',
            'ddd'=>'95',
            'telefone'=>'3623-5294'],

            2 =>['nome'=>'Massas e Panquecas',
            'status'=>'ativo',
            'cnpj'=>' 09.087.447/0002-03',
            'ddd'=>'98',
            'telefone'=>'3224-6969']
        ];

       // $fornecedores = [];
            return view('app.fornecedores.index', compact('fornecedores'));
    }
}
