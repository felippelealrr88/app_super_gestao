<?php

namespace App\Http\Controllers;

use App\Cliente;
use Facade\FlareClient\Http\Client;
use Illuminate\Http\Request;

class ClientesController extends Controller
{
    
    public function index(Request $request)
    {
        //Recebe os clientes do banco
        $clientes = Cliente::paginate(10);

        return view('app.cliente.index', ['clientes' => $clientes, 'request' => $request->all()]);
    }

    
    public function create()
    {
        $clientes = Cliente::all();
        return view('app.cliente.create', ['clientes' => $clientes]);
    }

   
    public function store(Request $request)
    {
        //Validações
        $regras = [
            'nome' => 'required|min:3|max:40'
        ];

        $feedback = [
            'required' => 'O campo dever ser preenchido',
            'nome.min' => 'O campo dever ter no mínimo 3 caracteres! ',
            'nome.max' => 'O campo dever ter no máximo 40 caracteres! '
        ];

        $request->validate($regras, $feedback);

        $cliente = new Cliente();
        $cliente->nome = $request->get('nome');
        $cliente->save();

        return redirect()->route('cliente.index');
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
