<!-- Formulários de adição e edição -->    
                    @if (isset($produto_detalhe->id))
                    <form method="post" action="{{ route('produto.update', $produto_detalhe->id)}}">
                        @csrf
                        @method('PUT')
                    @else
                    <form method="post" action="{{ route('produto-detalhe.store')}}">
                        @csrf
                    @endif
                        <!-- -->

                        <!-- Dados dos formulários -->    
                        <input type="text" name="produto_id" value="{{ $produto_detalhe->produto_id ?? old('produto_id')}}" placeholder="Id do produto" class="borda-preta">
                        {{ $errors->has('produto_id') ? $errors->first('produto_id') : ''}}
                        
                        <input type="text" name="comprimento" value="{{ $produto_detalhe->comprimento ?? old('comprimento')}}" placeholder="Comprimento" class="borda-preta">
                        {{ $errors->has('comprimento') ? $errors->first('comprimento') : ''}}

                        <input type="text" name="largura" value="{{ $produto_detalhe->largura ?? old('largura')}}" placeholder="Largura" class="borda-preta">
                        {{ $errors->has('largura') ? $errors->first('largura') : ''}}

                        <input type="text" name="altura" value="{{ $produto_detalhe->altura ?? old('altura')}}" placeholder="Altura" class="borda-preta">
                        {{ $errors->has('altura') ? $errors->first('altura') : ''}}


                        <select name="unidade_id" class="borda-preta">
                            <option value="">-- Selecione a Unidade de Medida --</option> <!-- Opção padrão vazia -->
                            @foreach ($unidades as $unidade)
                                <option value="{{ $unidade->id }}" {{ ($produto_detalhe->unidade_id ?? old('unidade_id')) == $unidade->id ? 'selected' : '' }}>{{ $unidade->descricao }}</option>
                            @endforeach
                        </select>

                        <button type="submit" class="borda-preta">Cadastrar</button>
                    </form>