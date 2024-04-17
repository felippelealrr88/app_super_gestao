<?php

namespace App\Http\Controllers;

use App\Produto;
use Illuminate\Http\Request;

class ProdutoController extends Controller
{
    
    public function index(Request $request)
    {
        // realiza uma consulta ao banco de dados
        $produtos = Produto::paginate(9);
        
        return view('app.produto.index', ['produtos' => $produtos, 'request' => $request->all()]);
    }

    
    public function create()
    {
        //
    }

    
    public function store(Request $request)
    {
        //
    }

    
    public function show($id)
    {
        //
    }

    
    public function edit($id)
    {
        //
    }

    
    public function update(Request $request, $id)
    {
        //
    }

    
    public function destroy($id)
    {
        //
    }
}
