<h3>Fornecedores</h3>

@php
    
@endphp



Fornecedor: {{$fornecedores[0]['nome']}}
Status: {{$fornecedores[0]['status']}}
<br/>

@if ($fornecedores[0]['status'] == 's')
   Fornecedor inativo 
  
@endif
<br/>
@unless ($fornecedores[0]['status'] == 'n') <!-- Executa se o retorno da condição for false (!)-->
    Fornecedor ativo
@endunless