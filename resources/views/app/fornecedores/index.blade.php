<h3>Fornecedores</h3><hr/>

@php
    /*if(empty(@variavel)){} retorna true se a variável estiver vazia
    - ''
    - 0
    - 0.0
    - '0'
    - null
    - false
    - array()
    - $var
    */
@endphp

@isset($fornecedores)
  
    @forelse($fornecedores as $indice => $fornecedores) <!-- Se houver itens a percorrer no array executa o bloco, se não desvia o bloco (empty) -->

        Fornecedor: @{{$fornecedores['nome'] ?? 'Sem nome' }}<br/><!--Escapa o interpretador BladePHP-->    
        Status: {{$fornecedores['status'] ?? 'Indefinido' }}<br/>
        CNPJ: {{ $fornecedores['cnpj'] ?? 'Dados não preenchidos' }}<br/>
        ddd: {{$fornecedores['ddd'] ?? '00' }}<br/>
        Telefone: {{$fornecedores['telefone'] ?? '00000-0000' }}<br/>

            @switch($fornecedores['ddd'])
                @case('11')
                São Paulo - SP
                @break

                @case('98')
                São Luiz - MA
                @break

                @case('95')
                Boa Vista - RR
                @break    

                @default
                Estado não informado
            
            @endswitch <hr/> 
    @empty
        Não Existem fornecedores cadastrados.  
    @endforelse
    



    <!-- VALOR DEFAULT (??)
    Se a variável testada não estiver definida 
    ou
    Se a variável testada possuir o valor null
    -->
    
@endisset

  