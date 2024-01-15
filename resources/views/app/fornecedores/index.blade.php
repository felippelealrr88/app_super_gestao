<h3>Fornecedores</h3>

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
    
    Fornecedor 1: {{$fornecedores[0]['nome'] ?? 'Sem nome' }}<br/>    
    Status: {{$fornecedores[0]['status'] ?? 'Indefinido' }}<br/>
    CNPJ: {{ $fornecedores[0]['cnpj'] ?? 'Dados não preenchidos' }}<br/>
    ddd: {{$fornecedores[0]['ddd'] ?? '00' }}<br/>
    Telefone: {{$fornecedores[0]['telefone'] ?? '00000-0000' }}<br/>
    @switch($fornecedores[0]['ddd'])
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
            
    @endswitch <br/><br/>


    Fornecedor 2: {{$fornecedores[1]['nome'] ?? 'Sem nome' }}<br/>    
    Status: {{$fornecedores[1]['status'] ?? 'Indefinido' }}<br/>
    CNPJ: {{ $fornecedores[1]['cnpj'] ?? 'Dados não preenchidos' }}<br/>
    ddd: {{$fornecedores[1]['ddd'] ?? '00' }}<br/>
    Telefone: {{$fornecedores[1]['telefone'] ?? '00000-0000' }}<br/>
    @switch($fornecedores[1]['ddd'])
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
            
    @endswitch <br/><br/>


    Fornecedor 3: {{$fornecedores[2]['nome'] ?? 'Sem nome' }}<br/>    
    Status: {{$fornecedores[2]['status'] ?? 'Indefinido' }}<br/>
    CNPJ: {{ $fornecedores[2]['cnpj'] ?? 'Dados não preenchidos' }}<br/>
    ddd: {{$fornecedores[2]['ddd'] ?? '00' }}<br/>
    Telefone: {{$fornecedores[2]['telefone'] ?? '00000-0000' }}<br/>
    
    @switch($fornecedores[2]['ddd'])
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
            
    @endswitch
    
    <br/><br/>

    <!-- VALOR DEFAULT (??)
    Se a variável testada não estiver definida 
    ou
    Se a variável testada possuir o valor null
    -->
    
@endisset

  