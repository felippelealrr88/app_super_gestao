<h3>Fornecedores</h3>

@php
    
@endphp

@if (count($fornecedores) > 0 && count($fornecedores) < 10)
    <h3>Existem alguns fornecedores cadastrados</h3>
@elseif (count($fornecedores) > 10)
    <h3>Existem dezenas de fornecedores cadastrados</h3>
@else
    <h3>ainda não existem fornecedores cadastrados</h3>
@endif    
