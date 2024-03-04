
    <form action="{{ route('site.contato')}}" method="post">
        @csrf
        {{$slot}} 
        <!-- Recebendo parametros das views que usam esse componente
            Nesse caso o parametro foi usado para definir o CSS da página
            configurando a borda de acordo com o uso especpifico em cada view
        -->

        <input name="nome" value="{{ old('nome') }}" type="text" placeholder="Nome" class="{{$classe}}">
        <br>
        <input name="telefone" value="{{ old('telefone') }}" type="text" placeholder="Telefone" class="{{$classe}}">
        <br>
        <input name="email" value="{{ old('email') }}" type="email" placeholder="E-mail" class="{{$classe}}">
        <br>
        <select name="motivo_contato" value="{{ old('motivo_contato') }}" class="{{$classe}}">
            <option value="">Qual o motivo do contato?</option>
            <option value="1">Dúvida</option>
            <option value="2">Elogio</option>
            <option value="3">Reclamação</option>
            <option value="4">Sugestão</option>
        </select>
        <br>
        <textarea name="mensagem" class="{{$classe}}" placeholder="Digite sua mensagem">@if (old('mensagem') != ''){{ old('mensagem') }}@else Preencha aqui a sua mensagem.@endif</textarea>
        <br>
        <button type="submit" class="{{$classe}}">Enviar</button>
                            
    </form>

    <div style="position:absolute; top:0; left:0; width:100%; height:10%; background:red">
        {{print_r('Não foi possível enviar o formulário. Erro: '.$errors)}}
    </div>

    

    