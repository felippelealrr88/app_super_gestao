
<!-- Formulários de adição e edição -->    
                        @if (isset($cliente->id))
                    <form method="post" action="{{ route('cliente.update', $cliente->id)}}">
                        @csrf
                        @method('PUT')
                        @else

                    <form method="post" action="{{ route('cliente.store')}}">
                        @csrf
                        @endif
        
                        <!-- Dados dos formulários -->    
                        <input type="text" name="nome" value="{{ $cliente->nome ?? old('nome')}}" placeholder="Nome" class="borda-preta">
                        {{ $errors->has('nome') ? $errors->first('nome') : ''}}
                    
                        <button type="submit" class="borda-preta">Cadastrar</button>
                    </form>