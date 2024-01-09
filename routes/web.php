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
Route::get('/principal', 'PrincipalController@principal')->name('site.index');
Route::get('/sobre-nos', 'SobreNosController@sobreNos')->name('site.sobrenos');
Route::get('/contato', 'ContatoController@contato')->name('site.contato');
Route::get('/login', 'LoginController@login')->name('site.login');

//Agrupamento de rotas (metodo name cria um alias para as rotas)
Route::prefix('/app')->group(function(){
    Route::get('/clientes', 'ClientesController@clientes')->name('app.clientes');
    Route::get('/fornecedores', 'FornecedoresController@fornecedores')->name('app.fornecedores');
    Route::get('/produtos', 'ProdutosController@produtos')->name('app.produtos');
});


/*Route::get(
    '/contato/{nome}/{categoria_id?}',                  
    //Para tornar os parametro opcionais basta adicionar um ? logo após o parâmetro. Ex: /{mensagen?}'
    //Pode-se atribuir um valor defeult com = ''. Ex: string $mensagem = 'Mensagem não enviada'
    function(
        string $nome = 'Desconhecido',
        int $categoria_id = 1 // 1 - 'Informação'
    ) {   
        echo "Nome: ". $nome. "<br>Categoria: ". $categoria_id;
      }
    )->where('categoria_id', '[0-9]+')->where('nome', '[A-Za-z]+');
    //Epressões regulares que permitem condicionar os parâmetros
    // + representa ao menos um caractere sendo enviado

*/