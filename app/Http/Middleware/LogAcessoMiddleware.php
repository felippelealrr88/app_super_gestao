<?php

namespace App\Http\Middleware;

use Closure;
use Facade\FlareClient\Http\Response;
use App\LogAcesso;

class LogAcessoMiddleware
{
    
    public function handle($request, Closure $next)
    {
        //Pegar o ip da solicitação pelo Request [dd($request)] para detalhes
        $ip= $request->server->get('REMOTE_ADDR');
        
        //Pegara rota
        $rota = $request->getRequestUri();


        //Pode ser usado graças ao $fillable na Model
        //Passa um array 'log' com a msg desejada
        LogAcesso::create(['log' => "IP $ip requisitou a rota $rota"]);

        

        return $next($request);
        return Response('Chegamos ao middleware');
        
    }
}
