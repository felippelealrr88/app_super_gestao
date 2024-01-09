<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
| GET, POST, PUT, PATCH, DELETE, OPTIONS
*/

// rota, classe controladora e respectivo método/action no lugar da function de callback
Route::get('/', 'PrincipalController@principal');

Route::get('/sobre-nos', 'SobreNosController@sobreNos');

Route::get('/contato', 'ContatoController@contato');

Route::get('/contato/{nome}/{categoria}/{assunto}/{mensagen}',                  
//Para tornar os parametro opcionais basta adicionar um ? logo após o parâmetro. Ex: /{mensagen?}'
//Pode-se atribuir um valor defeult com = ''. Ex: string $mensagem = 'Mensagem não enviada'
function(string $nome,
string $categoria,
string $assunto,
string $mensagem){   
    echo 'Nome: '.$nome.'<br>Categoria: '.$categoria.' <br>Assunto: '.$assunto.' <br>Mensagem: '.$mensagem;
});

