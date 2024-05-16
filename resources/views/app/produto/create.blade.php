@extends('app.layouts.basico')

@section('titulo', 'Produto')

@section('conteudo')

    <div class="conteudo-pagina">

        <div class="titulo-pagina-2">
            <p>Adicionar Produto</p>    
        </div>

        <!-- Menu -->
        <div class="menu">
            <ul>
                <li><a href="{{ route('produto.index') }}">Voltar</a></li>
                <li><a href="">Consulta</a></li>
            </ul>
        </div>
        <!-- -->        

        <div class="informacao-pagina">
            <div style="width: 30%; margin-left: auto; margin-right: auto;">

            <!-- Usando o componente form_create_edit e passando o parametro esperado -->    
                @component('app.produto._components.form_create_edit', ['unidades' => $unidades, 'fornecedores' => $fornecedores])   
                @endcomponent
                    
            </div>
        </div>

    </div>

@endsection
