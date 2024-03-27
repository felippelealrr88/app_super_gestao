<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Response;

class AutenticacaoMiddleware
{
    
    public function handle($request, Closure $next)
    {
        if(false){
            return $next($request);
        }else{
            return Response(' Acesso negado! Faça Login para acessar o sitema! ');
        }
        
        
    }
}
