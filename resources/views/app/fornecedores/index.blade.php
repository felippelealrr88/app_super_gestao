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
    @php
        $i =0;    
    @endphp
    @while (isset($fornecedores[$i])) <!-- Percorre o array até a posição não setada (3)-->

        Fornecedor {{$i}}: {{$fornecedores[$i]['nome'] ?? 'Sem nome' }}<br/>    
        Status: {{$fornecedores[$i]['status'] ?? 'Indefinido' }}<br/>
        CNPJ: {{ $fornecedores[$i]['cnpj'] ?? 'Dados não preenchidos' }}<br/>
        ddd: {{$fornecedores[$i]['ddd'] ?? '00' }}<br/>
        Telefone: {{$fornecedores[$i]['telefone'] ?? '00000-0000' }}<br/>

            @switch($fornecedores[$i]['ddd'])
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
    @php
        $i++;
    @endphp        
    @endwhile
    



    <!-- VALOR DEFAULT (??)
    Se a variável testada não estiver definida 
    ou
    Se a variável testada possuir o valor null
    -->
    
@endisset

  