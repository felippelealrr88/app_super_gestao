<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PrincipalController extends Controller
{
    public function principal(){

        //simulando a recuperação dos dados do banco com um array
        $motivos_contato = [
            '1' => 'Dúvida',
            '2' => 'Elogio',
            '3' => 'Reclamação',
            '4' => 'Sugestão',
            '5' => 'Outros'

        ];

        return view('site.principal', ['motivos_contato' => $motivos_contato]);
    }
}
