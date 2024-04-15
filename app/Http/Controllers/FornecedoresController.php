<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Fornecedor;

class FornecedoresController extends Controller
{
    public function index() {
        return view('app.fornecedor.index');
    }

    public function listar(Request $request) {

        //Retorna uma Collection na pesquisa ao banco com get()
        // realiza uma consulta flexível ao banco de dados

        $fornecedores = Fornecedor::where('nome', 'like', '%' .$request->input('nome').'%')
        ->where('site', 'like', '%' .$request->input('site').'%')
        ->where('uf', 'like', '%' .$request->input('uf').'%')
        ->where('email', 'like', '%' .$request->input('email').'%')
        ->paginate(5);
        
        return view('app.fornecedor.listar', ['fornecedores' => $fornecedores]);
    }

    public function adicionar(Request $request) {

        $msg = '';

        //INCLUSÃO
        //Verifica se o token está definido e o id vazio
        if($request->input('_token') != '' && $request->input('id') == '') {
            //Se o token é válido
            $regras = [
                'nome' => 'required|min:3|max:40',
                'site' => 'required',
                'uf' => 'required|min:2|max:2',
                'email' => 'email'
            ];

            //Mensagens de Feedback
            $feedback = [
                'required' => 'O campo :attribute deve ser preenchido!',
                'nome.min' => 'O campo nome deve ter no mínimo 3 caracteres!',
                'nome.max' => 'O campo nome deve ter no máximo 40 caracteres!',
                'uf.min' => 'O campo uf deve ter no mínimo 2 caracteres!',
                'uf.max' => 'O campo uf deve ter no máximo 2 caracteres!',
                'email.email' => 'O campo e-mail não foi preenchido corretamente!'
            ];
            
            //Realiza a validação com Resquest
            $request->validate($regras, $feedback);

            //Instancia um fornecedor
            $fornecedor = new Fornecedor();
            //Insere os dados no banco
            $fornecedor->create($request->all());

            //redirect

            //dados view
            $msg = 'Cadastro realizado com sucesso';
        }

        //EDIÇÃO
        //Verifica se o token está definido e o id vazio
        if($request->input('_token') != '' && $request->input('id') != ''){
           
            //Realiza a pesquisa do Objeto Fornecedor
            $fornecedor = Fornecedor::find($request->input('id')); 

            //Realiza a edição
            $update = $fornecedor->update($request->all());

            if($update){
                $msg = 'Update realizado com sucesso!';
            }else {
                $msg = 'Não foi possível atualizar!';
            }    

            return redirect()->route('app.fornecedor.editar', ['id' => $request->input('id'), 'msg' => $msg]);
        }

        return view('app.fornecedor.adicionar', ['msg' => $msg]);

    }

    public function editar($id, $msg = ''){
        //Pesquisa o fornecedor no banco pelo id recebido
        $fornecedor = Fornecedor::find($id);
        

        return view('app.fornecedor.adicionar', ['fornecedor' => $fornecedor, 'msg'=>$msg]);
    }
}
