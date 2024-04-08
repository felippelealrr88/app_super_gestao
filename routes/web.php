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

// rota principal do site
Route::get('/principal', 'PrincipalController@principal')->name('site.index')
->middleware('log.acesso');

//Outras rotas do site
Route::get('/sobre-nos', 'SobreNosController@sobreNos')->name('site.sobrenos');
Route::get('/contato', 'ContatoController@contato')->name('site.contato');
Route::post('/contato', 'ContatoController@salvar')->name('site.contato');

//Rotas de Login ==========================================================================
Route::get('/login/{erro?}', 'LoginController@login')->name('site.login');
Route::post('/login', 'LoginController@autenticar')->name('site.login');

//Agrupamento de rotas app ===========================================================
//Encadeamento de Middlewares pelo apelido
Route::middleware('log.acesso', 'autenticacao')
    ->prefix('/app')->group(function(){
    Route::get('/home', 'HomeController@index')->name('app.home');
    Route::get('/sair', 'LoginController@sair')->name('app.sair');
    Route::get('/cliente', 'ClientesController@index')->name('app.cliente');
    Route::get('/produto', 'ProdutosController@index')->name('app.produto');

    //Fornecedores
Route::get('/fornecedor', 'FornecedoresController@index')->name('app.fornecedor');
Route::post('/fornecedor/listar', 'FornecedoresController@listar')->name('app.fornecedor.listar');
Route::get('/fornecedor/adicionar', 'FornecedoresController@adicionar')->name('app.fornecedor.adicionar');
Route::post('/fornecedor/adicionar', 'FornecedoresController@adicionar')->name('app.fornecedor.adicionar');


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