@extends('site.layouts.basico')

    @section('conteudo')
        <div class="topo">

            <div class="logo">
                <img src="{{asset('img/logo.png')}}">
            </div>

            <div class="menu">
                <ul>
                    <li><a href="{{ route('site.index') }}">Principal</a></li>
                    <li><a href="{{ route('site.sobrenos') }}">Sobre Nós</a></li>
                    <li><a href="{{ route('site.contato') }}">Contato</a></li>
                </ul>
            </div>
        </div>

        <div class="conteudo-destaque">
        
            <div class="esquerda">
                <div class="informacoes">
                    <h1>Sistema Super Gestão</h1>
                    <p>Software para gestão empresarial ideal para sua empresa.<p>
                    <div class="chamada">
                        <img src="img/check.png">
                        <span class="texto-branco">Gestão completa e descomplicada</span>
                    </div>
                    <div class="chamada">
                        <img src="img/check.png">
                        <span class="texto-branco">Sua empresa na nuvem</span>
                    </div>
                </div>

                <div class="video">
                    <img src="{{asset('img/player_video.jpg')}}">
                </div>
            </div>

            <div class="direita">
                <div class="contato">
                    <h1>Contato</h1>
                    <p>Caso tenha qualquer dúvida por favor entre em contato com nossa equipe pelo formulário abaixo.<p>
                    <form>
                        <input type="text" placeholder="Nome" class="borda-branca">
                        <br>
                        <input type="text" placeholder="Telefone" class="borda-branca">
                        <br>
                        <input type="text" placeholder="E-mail" class="borda-branca">
                        <br>
                        <select class="borda-branca">
                            <option value="">Qual o motivo do contato?</option>
                            <option value="">Dúvida</option>
                            <option value="">Elogio</option>
                            <option value="">Reclamação</option>
                        </select>
                        <br>
                        <textarea class="borda-branca">Preencha aqui a sua mensagem</textarea>
                        <br>
                        <button type="submit" class="borda-branca">ENVIAR</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="rodape">
            <div class="redes-sociais">
                <h2>Redes sociais</h2>
                <img src="{{asset('img/facebook.png')}}">
                <img src="{{asset('img/linkedin.png')}}">
                <img src="{{asset('img/youtube.png')}}">
            </div>
            <div class="area-contato">
                <h2>Contato</h2>
                <span>(11) 3333-4444</span>
                <br>
                <span>supergestao@dominio.com.br</span>
            </div>
            <div class="localizacao">
                <h2>Localização</h2>
                <img src="{{asset('img/mapa.png')}}">
            </div>
        </div>
    @endsection    
    