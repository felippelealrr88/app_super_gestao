@extends('app.layouts.basico')

@section('titulo', 'Clientes')

@section('conteudo')

    <div class="conteudo-pagina">

        <div class="titulo-pagina-2">
            <p>Listagem de Clientes</p>
        </div>

        <div class="menu">
            <ul>
                <li><a href="{{ route('cliente.create')}}">Novo</a></li>
                <li><a href="">Consulta</a></li>
            </ul>
        </div>

        <div class="informacao-pagina">
            <div style="width: 90%; margin-left: auto; margin-right: auto;">
                <table border="1" width="100%">
                    <thead>
                        <tr>
                            <th>Nome</th>
                            <th>Visualizar</th>
                            <th>Editar</th>
                            <th>Excluir</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($clientes as $cliente)
                        <tr>
                            <td>{{ $cliente->nome }}</td>
                            
                            <td><a href=" {{ route('cliente.show', $cliente->id)}} ">Visualizar</a></td>
                            <td><a href=" {{ route('cliente.edit', $cliente->id)}} ">Editar</a></td>
                            <td>
                                <form method="post" action="{{ route('cliente.destroy', $cliente->id) }}">
                                    @method('DELETE')
                                    @csrf
                                    <button type="submit">Excluir</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>

                {{ $clientes->appends($request)->links()}}
                <br>
                Exibindo {{$clientes->count()}} produtos de {{$clientes->total()}} (de {{$clientes->firstItem()}} até {{$clientes->lastItem()}})
            </div>
        </div>

    </div>

@endsection
