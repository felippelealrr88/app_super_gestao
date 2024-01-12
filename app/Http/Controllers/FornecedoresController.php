<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FornecedoresController extends Controller
{
    public function index(){
        $fornecedores = [
            0 =>['nome'=>'Fornecedor 1', 'status'=>'s']
        ];
                return view('app.fornecedores.index', compact('fornecedores'));
    }
}
