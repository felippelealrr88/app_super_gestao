<?php

namespace App\Http\Controllers;

use App\Produto;
use App\ProdutoDetalhe;
use App\Unidade;
use Illuminate\Http\Request;

class ProdutoDetalheController extends Controller
{
    
    public function index()
    {
        //
    }

    
    public function create()
    {
        $unidades = Unidade::all();

        return view('app.produto_detalhe.create', ['unidades' => $unidades]);
    }

    
    public function store(Request $request)
    {
        //Recebe os dados do formulário
        $detalhes = ProdutoDetalhe::create($request->all());
        
    }

    
    public function show($id)
    {
        //
    }

   
    public function edit(ProdutoDetalhe $produto_detalhe)
    {
        $unidades = Unidade::all();

        return view('app.produto_detalhe.edit', ['produto_detalhe' => $produto_detalhe, 'unidades' => $unidades]);
    }

    
    public function update(Request $request, ProdutoDetalhe $produto_detalhe)
    {
        //Atualiza o produto detalhe com e requisição recebida do formulário por meio do método Request
        $produto_detalhe->update($request->all());
        echo 'Detalhes atualizados com sucesso!';
    }

   
    public function destroy($id)
    {
        //
    }
}
