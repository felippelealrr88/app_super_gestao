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
@isset($fornecedores[0]['status'])
    Status: {{$fornecedores[0]['status']}}<br/>
@endisset
@isset($fornecedores[0]['cnpj'])
    Cnpj: {{$fornecedores[0]['cnpj']}}<br/><br/>
@endisset        

@isset($fornecedores[1]['nome'])
    Fornecedor 1: {{$fornecedores[1]['nome']}}<br/>    
@endisset
@isset($fornecedores[1]['status'])
    Status: {{$fornecedores[1]['status']}}<br/>
@endisset
@isset($fornecedores[1]['cnpj'])
    Cnpj: {{$fornecedores[1]['cnpj']}}
    @empty($fornecedores[1]['cnpj'])
        - Vazio
    @endempty
@endisset    