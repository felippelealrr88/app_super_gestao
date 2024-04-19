<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class LoginController extends Controller
{
    //Exibe a página de login
    public function login(Request $request){
        //Recebe o erro encaminhado ao não encontrar login e senha correspondente no banco
        $erro = '';
        
        if ($request->get('erro') == 1) {
            $erro = 'Usuário ou senha inválidos! ';
        };    

        if ($request->get('erro') == 2) {
            $erro = 'Realize login para acessar a página! ';
        };   

        //Retorna a variável título dinâmica usada na página
        return view('site.login', ['titulo' => 'Login', 'erro' => $erro]);
    }

    //Realizaa autenticação
    public function autenticar(Request $request){
        //Validação básica
        $regras = [
            'usuario' => 'email',
            'senha' => 'required'
        ];

        //Mensagens de feedback
        $feedback = [
            'usuario.email' => 'O campo usuário (e-mail) é obrigatório',
            'senha.required' => 'O campo senha é obrigatório'
        ];

        //Faz a validação usando as regras e o feedback pre estabelecidos
        $request->validate($regras, $feedback);

        //Recuperando os parametros do formulário com Resquest
        $email = $request->get('usuario');
        $senha = $request->get('senha');

        //Iniciar o Model User (tabela user do banco)
        $user = new User();

        //Verifica se os dados enviados no formulário existem no banco de dados retornando uma Collection com get()
        //Pegando apenas o primeiro retorno com first()
        $usuario = $user->where('email', $email)
        ->where('password', $senha)
        ->get()
        ->first();

        if (isset($usuario->name)) {
            //Atribuindo valores do formulário para a sessão
            session_start();
            $_SESSION['nome'] = $usuario->name;
            $_SESSION['email'] = $usuario->email;
            
            return redirect()->route('app.home');

        }else
            //redireciona para a rota passando o erro
            return redirect()->route('site.login', ['erro' => 1]);
    }

    public function sair(){
        session_destroy();
        //Retorna a variável título dinâmica usada na página
        return redirect()->route('site.login', ['titulo' => 'Login']);
    }
}
