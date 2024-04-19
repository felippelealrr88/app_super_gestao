@extends('app.layouts.basico')

@section('titulo', 'Detalhes do Produto')

@section('conteudo')

    <div class="conteudo-pagina">

        <div class="titulo-pagina-2">
            <p>Produto - Detalhes</p>
        </div>

        <div class="menu">
            <ul>
                <li><a href="{{ route('produto.index') }}">Voltar</a></li>
                <li><a href="">Consulta</a></li>
            </ul>
        </div>

        <div class="informacao-pagina">
            <div style="width: 30%; margin-left: auto; margin-right: auto;">
                
                <table border ="1">
                    <tr>
                        <td>Id:</td>
                        <td>{{ $produto->id }}</td>
                    </tr>
                    <tr>
                        <td>Descrição:</td>
                        <td>{{ $produto->descricao }}</td>
                    </tr>
                    <tr>
                        <td>Peso:</td>
                        <td>{{ $produto->peso }}</td>
                    </tr>
                    <tr>
                        <td>Unidade de Medida:</td>
                        <td>{{ $produto->unidade_id }}</td>
                    </tr>

                </table>

                
                <button type="submit" class="borda-preta">Cadastrar</button>
                
            </div>
        </div>

    </div>

@endsection
