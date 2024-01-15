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

@isset($fornecedores[0]['nome'])
    Fornecedor 1: {{$fornecedores[0]['nome']}}<br/>    
@endisset
@isset($fornecedores[1]['status'])
    Status: {{$fornecedores[1]['status']}}<br/>
@endisset

CNPJ: {{ $fornecedores[1]['cnpj'] ?? 'Dados não preenchidos' }}

<!-- VALOR DEFAULT (??)
Se a variável testada não estiver definida 
ou
Se a variável testada possuir o valor null
-->

  