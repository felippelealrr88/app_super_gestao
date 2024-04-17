<?php

namespace App\Http\Controllers;

use App\Produto;
use App\Unidade;
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
        //Recupera os dados do banco
        $unidades = Unidade::all();

        return view('app.produto.create', ['unidades' => $unidades]);
    }

    
    public function store(Request $request)
    {
        //Validação dos campos
        //Mensagens de feedback
    
        //Inlusão dos campos
        $produtos = Produto::create($request->all());

        return redirect()->route('produto.index');

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
