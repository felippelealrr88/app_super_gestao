<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

//Se a rota não existir
Route::fallback(function(){
    echo 'Página não encontrada. Clique <a href="'.route('site.index').'">aqui</a> para voltar ao início'; 
});

//ROTA PRINCIPAL DO SITE
Route::get('/principal', 'PrincipalController@principal')->name('site.index')
->middleware('log.acesso');

//Outras rotas do site
Route::get('/sobre-nos', 'SobreNosController@sobreNos')->name('site.sobrenos');
Route::get('/contato', 'ContatoController@contato')->name('site.contato');
Route::post('/contato', 'ContatoController@salvar')->name('site.contato');

//ROTAS DE LOGIN ==========================================================================
Route::get('/login/{erro?}', 'LoginController@login')->name('site.login');
Route::post('/login', 'LoginController@autenticar')->name('site.login');

//ROTAS DO SITE ===========================================================
//Encadeamento de Middlewares pelo apelido
Route::middleware('log.acesso', 'autenticacao')
    ->prefix('/app')->group(function(){
    Route::get('/home', 'HomeController@index')->name('app.home');
    Route::get('/sair', 'LoginController@sair')->name('app.sair');
    Route::get('/cliente', 'ClientesController@index')->name('app.cliente');
    Route::get('/produto', 'ProdutoController@index')->name('app.produto');

//ROTAS DE FORNECEDOR
Route::get('/fornecedor', 'FornecedoresController@index')->name('app.fornecedor');

Route::get('/fornecedor/listar', 'FornecedoresController@listar')->name('app.fornecedor.listar');
Route::post('/fornecedor/listar', 'FornecedoresController@listar')->name('app.fornecedor.listar');

Route::get('/fornecedor/adicionar', 'FornecedoresController@adicionar')->name('app.fornecedor.adicionar');
Route::post('/fornecedor/adicionar', 'FornecedoresController@adicionar')->name('app.fornecedor.adicionar');

Route::get('/fornecedor/editar/{id}/{msg?}', 'FornecedoresController@editar')->name('app.fornecedor.editar');
Route::get('/fornecedor/excluir/{id}/{msg?}', 'FornecedoresController@excluir')->name('app.fornecedor.excluir');

//ROTAS DE PRODUTO
//Usando os recursos do Laravel para rotas
Route::resource('produto', 'ProdutoController');

/* Resultado do comando php artisan route:list

| Domain | Method    | URI                                | Name                     | Action                                                | Middleware   |
|        | POST      | app/produto                        | produto.store            | App\Http\Controllers\ProdutoController@store          | web          |
|        | GET|HEAD  | app/produto                        | produto.index            | App\Http\Controllers\ProdutoController@index          | web          |
|        | GET|HEAD  | app/produto/create                 | produto.create           | App\Http\Controllers\ProdutoController@create         | web          |
|        | PUT|PATCH | app/produto/{produto}              | produto.update           | App\Http\Controllers\ProdutoController@update         | web          |
|        | GET|HEAD  | app/produto/{produto}              | produto.show             | App\Http\Controllers\ProdutoController@show           | web          |
|        | DELETE    | app/produto/{produto}              | produto.destroy          | App\Http\Controllers\ProdutoController@destroy        | web          |
|        | GET|HEAD  | app/produto/{produto}/edit         | produto.edit             | App\Http\Controllers\ProdutoController@edit           | web          |

*/

});


/*
Route::get('/rota2', function(){
    return redirect()->route('site.rota1'); //redirecionando a rota
})->name('site.rota2');

//Rota de Fallback usada para redirecionar rotas inexistentas
Route::fallback(function(){
    echo 'Página não encontrada. Clique <a href="'.route('site.index').'">aqui</a> para voltar ao início'; 
});

Route::get(
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

    Route::get('/teste/{p1}/{p2}', 'TesteController@teste')->name('teste');
*/