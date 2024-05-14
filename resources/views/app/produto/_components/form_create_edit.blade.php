<!-- Formulários de adição e edição -->    
                    @if (isset($produto->id))
                    <form method="post" action="{{ route('produto.update', $produto->id)}}">
                        @csrf
                        @method('PUT')
                    @else
                    <form method="post" action="{{ route('produto.store')}}">
                        @csrf
                    @endif
                        <!-- -->

                        <!-- Dados dos formulários -->    
                        <input type="text" name="nome" value="{{ $produto->nome ?? old('nome')}}" placeholder="Nome" class="borda-preta">
                        {{ $errors->has('nome') ? $errors->first('nome') : ''}}
                        
                        <input type="text" name="descricao" value="{{ $produto->descricao ?? old('descricao')}}" placeholder="Descrição" class="borda-preta">
                        {{ $errors->has('descricao') ? $errors->first('descricao') : ''}}

                        <input type="text" name="peso" value="{{ $produto->peso ?? old('peso')}}" placeholder="peso" class="borda-preta">
                        {{ $errors->has('peso') ? $errors->first('peso') : ''}}

                        <select name="unidade_id" class="borda-preta">
                            <option value="">-- Selecione a Unidade de Medida --</option> <!-- Opção padrão vazia -->
                            @foreach ($unidades as $unidade)
                                <option value="{{ $unidade->id }}" {{ ($produto->unidade_id ?? old('unidade_id')) == $unidade->id ? 'selected' : '' }}>{{ $unidade->descricao }}</option>
                            @endforeach
                        </select>

                        <button type="submit" class="borda-preta">Cadastrar</button>
                    </form>