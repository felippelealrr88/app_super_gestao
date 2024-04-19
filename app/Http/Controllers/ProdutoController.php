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
        $regras = [
            'nome' => 'required|min:3|max:40',
            'descricao' => 'required|min:3|max:2000',
            'peso' => 'required|integer',
            'unidade_id' => 'required|exists:unidades,id'
        ];

        //Mensagens de Feedback
        $feedback = [
            'required' => 'O campo :attribute deve ser preenchido! ',
            'nome.min' => 'O campo nome deve ter no mínimo 3 caracteres! ',
            'nome.max' => 'O campo nome deve ter no máximo 40 caracteres! ',
            'descricao.min' => 'O campo nome deve ter no mínimo 3 caracteres! ',
            'descricao.max' => 'O campo nome deve ter no máximo 2000 caracteres! ',
            'peso.integer' => 'O campo nome deve ser um número inteiro! ',
            'unidade_id.exists' => 'Selecione uma unidade de medida válida! ',
            'unidade_id.required' => 'Selecione uma unidade de medida válida! ',

        ];
        
        //Realiza a validação com Resquest
        $request->validate($regras, $feedback);

    
        //Inlusão dos campos
        $produtos = Produto::create($request->all());

        return redirect()->route('produto.index');

    }

    
    public function show(Produto $produto)
    {
        return view('app.produto.show', ['produto' => $produto]);
    }

    
    public function edit(Produto $produto)
    {
        $unidades = Unidade::all();
        return view('app.produto.edit', ['produto' => $produto, 'unidades' => $unidades ]);
    }

    
    public function update(Request $request, Produto $produto)
    {
        //Os dados da requisição vão atualizar os dados do banco
        $produto->update($request->all());

        return redirect()->route('produto.index');
    }

    
    public function destroy(Produto $produto)
    {
        //Exclui o objeto recebido pelo id informado
        $produto->delete();
        return redirect()->route('produto.index');
        
    }
}
