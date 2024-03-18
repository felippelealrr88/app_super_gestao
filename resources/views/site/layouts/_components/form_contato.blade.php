
    <form action="{{ route('site.contato')}}" method="post">
        @csrf
        {{$slot}} 
        <!-- Recebendo parametros das views que usam esse componente
            Nesse caso o parametro foi usado para definir o CSS da página
            configurando a borda de acordo com o uso especpifico em cada view
        -->

        <input name="nome" required value="{{ old('nome') }}" type="text" placeholder="Nome" class="{{$classe}}">
        <br>
        <input name="telefone" required value="{{ old('telefone') }}" type="text" placeholder="Telefone" class="{{$classe}}">
        <br>
        <input name="email" required value="{{ old('email') }}" type="email" placeholder="E-mail" class="{{$classe}}">
        <br>
        <select name="motivo_contatos_id" required value="{{ old('motivo_contatos_id') }}" class="{{$classe}}">
            <option value="">Qual o motivo do contato?</option>

            @foreach ($motivos_contato as $key => $motivo_contato )
                <option value="{{$motivo_contato->id}}" {{ old('motivo_contatos_id') == $motivo_contato->id ? 'selected' : ''}}>{{$motivo_contato->motivo_contato}}</option>
            @endforeach

        </select>
        <br>
        <textarea name="mensagem" required class="{{$classe}}" placeholder="Digite sua mensagem">@if (old('mensagem') != ''){{ old('mensagem') }}@else Digite sua mensagem. @endif</textarea>
        <br>
        <button type="submit" class="{{$classe}}">Enviar</button>
                            
    </form>

    @if ($errors->any())
        <div class='alert alert-danger' style="position:absolute; top:0; left:0; width:100%; height:10%; background:red">
        <ul>
            @foreach ($errors->all() as $erro )
                <li>{{$erro}}</li>
                <br>
            @endforeach
        </ul>
            
        </div>    
    @endif
    

    

    