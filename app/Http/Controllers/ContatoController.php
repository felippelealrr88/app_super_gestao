<?php

namespace App\Http\Controllers;

use App\SiteContato;
use Illuminate\Http\Request;

class ContatoController extends Controller
{
    public function contato(Request $request){
        /*
        $contato = new SiteContato();
        //Recupera os dados da requisição do formulário
        $contato->nome = $request->input('nome');
        $contato->telefone = $request->input('telefone');
        $contato->email = $request->input('email');
        $contato->motivo_contato = $request->input('motivo_contato');
        $contato->mensagem = $request->input('mensagem');

        //salva o objeto no banco
        $contato->save();
        print_r('Mensagem enviada com sucesso!');
        */

        /*
        $contato2 = new SiteContato();
        // Preenche o Objeto (fill) contato2 com um array associativo,
        $contato2->fill($request->all());
        //print_r($contato2->getAttributes());
        $contato2->save();
        */


        $contato3 = new SiteContato();
        //Preenche o Objeto já populando o banco de dados
        //com o retorno do formulário
        $contato3->create($request->all());
        echo ('Formulário enviado!');


        return view('site.contato');
    }
}
