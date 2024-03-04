@extends('site.layouts.basico')

    @section('titulo', 'Contato')
    @section('conteudo')
    
        <div class="conteudo-pagina">
            <div class="titulo-pagina">
                <h1>Entre em contato conosco</h1>
            </div>

            <div class="informacao-pagina">
                <div class="contato-principal">
                    @component('site.layouts._components.form_contato', ['classe'=>'borda-preta', 'motivos_contato' => $motivos_contato]) <!-- Enviando parametros para o componente usado aqui nessa view-->
                        <p>Nossa Equipe entrará em contato em até 48h</p>
                    @endcomponent    
                </div>
            </div>  
        </div>

    @endsection    
    