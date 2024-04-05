<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Response;

class AutenticacaoMiddleware
{
    
    public function handle($request, Closure $next)
    {
        session_start();

        //Verifica se a sessão está setada e difere de vazio
        if (isset( $_SESSION['email']) && $_SESSION['email'] != '') {
            //Vai para a próxima requisição
            return $next($request);
        }else
            return redirect()->route('site.login', ['erro' => 2]);
        
        
    }
}
