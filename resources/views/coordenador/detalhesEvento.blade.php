@extends('layouts.app')
@section('sidebar')
<div class="wrapper">
    <div class="sidebar">
        <h2>{{{$evento->nome}}}</h2>
        <ul>
            <a id="informacoes" onclick="habilitarPagina('informacoes')">
                <li>
                    <img src="{{asset('img/icons/info-circle-solid.svg')}}" alt=""> <h5> Informações</h5>
                </li>
            </a>

            <a id="trabalhos">
                <li>
                    <img src="{{asset('img/icons/file-alt-regular.svg')}}" alt=""><h5>Trabalhos</h5><img class="arrow" src="{{asset('img/icons/arrow.svg')}}">
                </li>
                <div id="dropdownTrabalhos" style="background-color: gray">
                    <a id="submissoesTrabalhos" onclick="habilitarPagina('submissoesTrabalhos')">
                        <li>
                            <img src="{{asset('img/icons/plus-square-solid.svg')}}" alt=""><h5>Definir Submissões</h5>
                        </li>
                    </a>
                    <a id="listarTrabalhos" onclick="habilitarPagina('listarTrabalhos')">
                        <li>
                            <img src="{{asset('img/icons/list.svg')}}" alt=""><h5>Listar Trabalhos</h5>
                        </li>
                    </a>
                </div>
            </a>
            <a id="areas">
                <li>
                    <img src="{{asset('img/icons/area.svg')}}" alt=""><h5> Áreas</h5><img class="arrow" src="{{asset('img/icons/arrow.svg')}}">
                </li>
                <div id="dropdownAreas" style="background-color: gray">
                    <a id="cadastrarAreas" onclick="habilitarPagina('cadastrarAreas')">
                        <li>
                            <img src="{{asset('img/icons/plus-square-solid.svg')}}" alt=""><h5> Cadastrar Áreas</h5>
                        </li>
                    </a>
                    <a id="listarAreas" onclick="habilitarPagina('listarAreas')">
                        <li>
                            <img src="{{asset('img/icons/list.svg')}}" alt=""><h5> Listar Áreas</h5>
                        </li>
                    </a>
                </div>

            </a>
            <a id="revisores">
                <li>
                    <img src="{{asset('img/icons/glasses-solid.svg')}}" alt=""><h5>Revisores</h5><img class="arrow" src="{{asset('img/icons/arrow.svg')}}">
                </li>
                <div id="dropdownRevisores" style="background-color: gray">
                    <a id="cadastrarRevisores" onclick="habilitarPagina('cadastrarRevisores')">
                        <li>
                            <img src="{{asset('img/icons/user-plus-solid.svg')}}" alt=""><h5> Cadastrar Revisores</h5>
                        </li>
                    </a>
                    <a id="listarRevisores" onclick="habilitarPagina('listarRevisores')">
                        <li>
                            <img src="{{asset('img/icons/list.svg')}}" alt=""><h5> Listar Revisores</h5>
                        </li>
                    </a>
                </div>
            </a>
            <a id="comissao" onclick="habilitarPagina('comissao')">
                <li>
                    <img src="{{asset('img/icons/user-tie-solid.svg')}}" alt=""><h5>Comissão</h5><img class="arrow" src="{{asset('img/icons/arrow.svg')}}">
                </li>
                <div id="dropdownComissao" style="background-color: gray">
                    <a id="cadastrarComissao" onclick="habilitarPagina('cadastrarComissao')">
                        <li>
                            <img src="{{asset('img/icons/user-plus-solid.svg')}}" alt=""><h5> Cadastrar Comissão</h5>
                        </li>
                    </a>
                    <a id="definirCoordComissao" onclick="habilitarPagina('definirCoordComissao')">
                        <li>
                            <img src="{{asset('img/icons/crown-solid.svg')}}" alt=""><h5> Definir Coordenador</h5>
                        </li>
                    </a>
                    <a id="listarComissao" onclick="habilitarPagina('listarComissao')">
                        <li>
                            <img src="{{asset('img/icons/list.svg')}}" alt=""><h5> Listar Comissão</h5>
                        </li>
                    </a>
                </div>
            </a>
            <a id="modalidades">
                <li>
                    <img src="{{asset('img/icons/sitemap-solid.svg')}}" alt=""><h5>Modalidades</h5><img class="arrow" src="{{asset('img/icons/arrow.svg')}}">
                </li>
                <div id="dropdownModalidades" style="background-color: gray">
                    <a id="cadastrarModalidade" onclick="habilitarPagina('cadastrarModalidade')">
                        <li>
                            <img src="{{asset('img/icons/plus-square-solid.svg')}}" alt=""><h5> Cadastrar Modalidade</h5>
                        </li>
                    </a>
                    <a id="listarModalidade" onclick="habilitarPagina('listarModalidade')">
                        <li>
                            <img src="{{asset('img/icons/list.svg')}}" alt=""><h5> Listar Modalidades</h5>
                        </li>
                    </a>
                    <a id="cadastrarCriterio" onclick="habilitarPagina('cadastrarCriterio')">
                        <li>
                            <img src="{{asset('img/icons/plus-square-solid.svg')}}" alt=""><h5> Cadastrar Critérios</h5>
                        </li>
                    </a>
                    <a id="listarCriterios" onclick="habilitarPagina('listarCriterios')">
                        <li>
                            <img src="{{asset('img/icons/list.svg')}}" alt=""><h5> Listar Criterios</h5>
                        </li>
                    </a>
                </div>
            </a>

            <a id="eventos">
              <li>
                  <img src="{{asset('img/icons/sitemap-solid.svg')}}" alt=""><h5>Evento</h5><img class="arrow" src="{{asset('img/icons/arrow.svg')}}">
              </li>
              <div id="dropdownEvento" style="background-color: gray">
                  <a id="editarEtiqueta" onclick="habilitarPagina('editarEtiqueta')">
                      <li>
                          <img src="{{asset('img/icons/plus-square-solid.svg')}}" alt=""><h5>Etiquetas Eventos</h5>
                      </li>
                  </a>
                  <a id="editarEtiquetaSubTrabalhos" onclick="habilitarPagina('editarEtiquetaSubTrabalhos')">
                    <li>
                        <img src="{{asset('img/icons/plus-square-solid.svg')}}" alt=""><h5>Etiquetas Trabalho</h5>
                    </li>
                  </a>
              </div>
            </a>

            <a id="publicar">
                <li>
                  <img src="{{ asset('img/icons/publish.svg') }}" alt=""><h5>Publicar</h5><img class="arrow" src="{{asset('img/icons/arrow.svg')}}">
                </li>
                <div id="dropdownPublicar" style="background-color: gray">
                  <a id="publicarEvento" onclick="habilitarEvento()">
                    <form id="habilitarEventoForm" method="GET" action="{{route('evento.habilitar', ['id' => $evento->id])}}"></form>
                      <li>
                          <img src="{{asset('img/icons/plus-square-solid.svg')}}" alt=""><h5> Publicar Evento</h5>
                      </li>
                  </a>
                  <a id="desabilitarEventoPublicado" onclick="desabilitarEvento()">
                    <form id="desabilitarEventoForm" method="GET" action="{{route('evento.desabilitar', ['id' => $evento->id])}}"></form>
                      <li>
                          <img src="{{asset('img/icons/list.svg')}}" alt=""><h5> Desfazer publicação</h5>
                      </li>
                  </a>
              </div>
            </a>
            <!-- <a id="colocacao" onclick="habilitarPagina('colocacao')">
                <li>
                    <img src="{{asset('img/icons/trophy-solid.svg')}}" alt=""><h5>Classificação</h5>
                </li>
            </a>
            <a id="atividades" onclick="habilitarPagina('atividades')">
                <li>
                    <img src="{{asset('img/icons/calendar-alt-solid.svg')}}" alt=""><h5>Atividades</h5>
                </li>
            </a> -->
        </ul>
    </div>


</div>
@endsection
@section('content')

<div class="main_content">
  {{-- mensagem de confimação --}}
  @if(session('mensagem'))
    <div class="col-md-12" style="margin-top: 5px;">
        <div class="alert alert-success">
            <p>{{session('mensagem')}}</p>
        </div>
    </div>
  @endif
    {{-- {{ $evento->id ?? '' }} --}}
    {{-- Informações --}}
    <div id="divInformacoes" class="informacoes">
        <div class="row">
            <div class="col-sm-12">
                <h1 class="titulo-detalhes">Informações</h1>
            </div>
        </div>

        <!-- Row trabalhos -->
        <div class="row justify-content-center">
          <div class="col-sm-8">


            <div class="row justify-content-center">
              <div class="col-sm-12">
                <div class="card">
                  <div class="card-body">
                    <h5 class="card-title">Trabalhos</h5>
                    <h6 class="card-subtitle mb-2 text-muted">Informações referente aos trabalhos enviados</h6>
                    <p class="card-text">
                      <div class="row justify-content-center">
                        <div class="col-sm-12">
                          <table class="table table-responsive-lg table-hover">
                            <thead>
                              <tr>
                                <th style="text-align:center">Enviados</th>
                                <th style="text-align:center">Avaliados</th>
                                <th style="text-align:center">Pendentes</th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <td style="text-align:center"> {{$trabalhosEnviados}} </td>
                                <td style="text-align:center"> {{$trabalhosAvaliados}} </td>
                                <td style="text-align:center"> {{$trabalhosPendentes}} </td>
                              </tr>
                            </tbody>
                          </table>

                        </div>

                      </div>
                    </p>
                  </div>
                </div>
              </div>
            </div>
            <div class="row justify-content-center">
              <div class="col-sm-12">
                <div class="card">
                  <div class="card-body">
                    <h5 class="card-title">Organização</h5>
                    <h6 class="card-subtitle mb-2 text-muted">Informações referentes ao número de participantes na organização do evento</h6>
                    <p class="card-text">
                      <div class="row justify-content-center">
                        <div class="col-sm-12">
                          <table class="table table-responsive-lg table-hover">
                            <thead>
                              <tr>
                                <th style="text-align:center">Número de Revisores</th>
                                <th style="text-align:center">Número de Integrantes na Comissão</th>

                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <td style="text-align:center"> {{$numeroRevisores}} </td>
                                <td style="text-align:center"> {{$numeroComissao}} </td>
                              </tr>
                            </tbody>
                          </table>

                        </div>

                      </div>
                    </p>
                  </div>
                </div>
              </div>

            </div>

          </div>



        </div><!-- end Row trabalhos -->

    </div>
    {{-- Comissão --}}
    <div id="divCadastrarComissao" class="comissao">
        <div class="row">
            <div class="col-sm-12">
                <h1 class="titulo-detalhes">Cadastrar Comissão</h1>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-sm-5">
                <div class="card">
                    <div class="card-body">
                      <h5 class="card-title">Novo Membro</h5>
                      <h6 class="card-subtitle mb-2 text-muted">Cadastre um membro para sua Comissão</h6>
                      <form action="{{route('cadastrar.comissao')}}" method="POST">
                        @csrf
                        <input type="hidden" name="eventoId" value="{{ $evento->id ?? '' }}">
                        <p class="card-text">
                            <div class="row justify-content-center">
                                <div class="col-sm-12">
                                    <label for="emailMembroComissao" class="control-label">E-mail do novo membro</label>
                                    <input type="email" name="emailMembroComissao" class="form-control @error('emailMembroComissao') is-invalid @enderror" name="emailMembroComissao" value="{{ old('emailMembroComissao') }}" id="emailMembroComissao" placeholder="E-mail">
                                    @error('emailMembroComissao')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>

                        </div>
                        </p>
                        <div class="row justify-content-center">
                            <div class="col-md-12">
                                <button type="submit" class="btn btn-primary" style="width:100%">
                                    {{ __('Finalizar') }}
                                </button>
                            </div>
                        </div>

                        </form>
                    </div>
                  </div>{{-- end card--}}
            </div>

        </div>

    </div>{{-- End cadastrar Comissão --}}

    <div id="divDefinirCoordComissao" class="comissao">
        <div class="row">
            <div class="col-sm-12">
                <h1 class="titulo-detalhes">Definir Coordenador da Comissão</h1>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-sm-5">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Coordenador da Comissão</h5>
                        <h6 class="card-subtitle mb-2 text-muted">Selecione um coordenador para comissão do seu evento</h6>
                        <form id="formCoordComissao" action="{{route('cadastrar.coordComissao')}}" method="POST">
                            @csrf
                            <p class="card-text">
                                    <input type="hidden" name="eventoId" value="{{ $evento->id ?? '' }}">

                                    <div class="form-group">
                                        <label for="coodComissaoId">Coordenador Comissão</label>
                                        <select class="form-control" name="coordComissaoId" id="coodComissaoId">
                                            @foreach ($users as $user)
                                                @if($evento->coordComissaoId == $user->id)
                                                    <option value="{{$user->id}}" selected>{{$user->email}}</option>
                                                @else
                                                    <option value="{{$user->id}}">{{$user->email}}</option>
                                                @endif
                                            @endforeach
                                        </select>
                                    </div>
                                </p>
                                <div class="row justify-content-center">
                                    <div class="col-md-12">
                                        <button type="submit" class="btn btn-primary" style="width:100%">
                                            {{ __('Definir Coordenador') }}
                                        </button>

                                    </div>
                                </div>
                            </form>

                    </div>
                  </div>
            </div>
        </div>
    </div>{{-- End Cord Comissão --}}

    <div id="divListarComissao" class="comissao">
        <div class="row">
            <div class="col-sm-12">
                <h1 class="titulo-detalhes">Listar Comissão</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-body">
                      <h5 class="card-title">Comissão</h5>
                      <h6 class="card-subtitle mb-2 text-muted">Usuários cadastrados na comissão do seu evento.</h6>
                      <p class="card-text">
                        <table class="table table-hover table-responsive-lg table-sm">
                            <thead>
                                <th>
                                    <th>Nome</th>
                                    <th>Especialidade</th>
                                    <th>Celular</th>
                                    <th>E-mail</th>
                                    <th>Direção</th>
                                </th>
                            </thead>
                                @foreach ($users as $user)
                                    <tbody>

                                        <th>
                                          @if (isset($user->name))
                                            <td>{{$user->name}}</td>
                                            <td>{{$user->especProfissional}}</td>
                                            <td>{{$user->celular}}</td>
                                            <td>{{$user->email}}</td>
                                            @if ($evento->coordComissaoId == $user->id)
                                              <td>Coordenador</td>
                                            @endif
                                          @else
                                            <td>Usuário temporário - Sem nome</td>
                                            <td>Usuário temporário - Sem Especialidade</td>
                                            <td>Usuário temporário - Sem Celular</td>
                                            <td>{{$user->email}}</td>
                                            @if ($evento->coordComissaoId == $user->id)
                                              <td>Coordenador</td>
                                            @endif
                                          @endif
                                        </th>
                                    </tbody>
                                @endforeach
                        </table>
                      </p>
                    </div>
                  </div>
            </div>
        </div>


        {{-- tabela membros comissão --}}
        <div class="row">
            <div class="col-sm-12">
                <table class="table table-responsive-lg table-hover">

                </table>
            </div>
        </div>
    </div>{{-- End Listar Comissão --}}

    <!-- Trabalhos -->
    <div id="divListarTrabalhos" style="display: none">

        <div class="row titulo-detalhes">
            <div class="col-sm-10">
                <h1 class="">Trabalhos</h1>
            </div>

            <form method="GET" action="{{route('distribuicao')}}">
              <input type="hidden" name="eventoId" value="{{$evento->id}}">
              <div class="row justify-content-center">
                <div class="col-md-12">
                  <button onclick="event.preventDefault();" data-toggle="modal" data-target="#modalDistribuicaoAutomatica" class="btn btn-primary" style="width:100%">
                    {{ __('Distribuir Trabalhos') }}
                  </button>
                </div>
              </div>
            </form>

        </div>

    {{-- Tabela Trabalhos --}}
    <div class="row">
      <div class="col-sm-12">
        <table class="table table-hover table-responsive-lg table-sm">
          <thead>
            <tr>
              <th scope="col">ID</th>
              <th scope="col">Área</th>
              <th scope="col">Modalidade</th>
              <th scope="col">Revisores</th>
              <th scope="col" style="text-align:center">Baixar</th>
              <th scope="col" style="text-align:center">Visualizar</th>
            </tr>
          </thead>
          <tbody>
            @php $i = 0; @endphp
            @foreach($trabalhos as $trabalho)

            <tr>
              <td>{{$trabalho->id}}</td>
              <td>{{$trabalho->area->nome}}</td>
              <td>{{$trabalho->modalidade->nome}}</td>
              <td>
                @foreach($trabalho->atribuicao as $atribuicao)
                {{$atribuicao->revisor->user->email}},
                @endforeach
              </td>
              <td style="text-align:center">
                @php $arquivo = ""; $i++; @endphp
                @foreach($trabalho->arquivo as $key)
                @php
                if($key->versaoFinal == true){
                  $arquivo = $key->nome;
                }
                @endphp
                @endforeach
                <img onclick="document.getElementById('formDownload{{$i}}').submit();" class="" src="{{asset('img/icons/file-download-solid-black.svg')}}" style="width:20px" alt="">
                <form method="GET" action="{{ route('download') }}" target="_new" id="formDownload{{$i}}">
                  <input type="hidden" name="file" value="{{$arquivo}}">
                </form>
              </td>
              <td style="text-align:center">
                <a class="botaoAjax" href="#" data-toggle="modal" onclick="trabalhoId({{$trabalho->id}})" data-target="#modalTrabalho"><img src="{{asset('img/icons/eye-regular.svg')}}" style="width:20px"></a>
              </td>

            </tr>
            @endforeach
          </tbody>
        </table>
      </div>

    </div>

</div><!-- End Trabalhos -->
<!-- Definir Submissões -->
<div id="divDefinirSubmissoes" style="display: none">

    <div class="row titulo-detalhes">
        <div class="col-sm-10">
            <h1 class="">Definir Submissões</h1>
        </div>
    </div>

    <div class="row justify-content-center">
        <div class="col-sm-6">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Definir Submissões do Trabalho</h5>
                    <h6 class="card-subtitle mb-2 text-muted">Informe o número de trabalhos que cada autor poderá enviar e o número de trabalhos em que um usuário poderá ser um coautor</h6>
                    <form method="POST" action="{{route('trabalho.numTrabalhos')}}">
                    @csrf
                    <p class="card-text">
                        <input type="hidden" name="eventoId" value="{{$evento->id}}">

                        <div class="row justify-content-center">
                            <div class="col-sm-12">
                                <label for="trabalhosPorAutor" class="col-form-label">{{ __('Número de trabalhos por Autor') }}</label>
                                <input id="trabalhosPorAutor" type="text" class="form-control @error('trabalhosPorAutor') is-invalid @enderror" name="trabalhosPorAutor" value="{{ old('trabalhosPorAutor') }}" required autocomplete="trabalhosPorAutor" autofocus>

                                @error('trabalhosPorAutor')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>

                        </div>{{-- end row--}}

                        <div class="row justify-content-center">
                            <div class="col-sm-12">
                                <label for="numCoautor" class="col-form-label">{{ __('Número de trabalhos como Coautor') }}</label>
                                <input id="numCoautor" type="text" class="form-control @error('numCoautor') is-invalid @enderror" name="numCoautor" value="{{ old('numCoautor') }}" required autocomplete="numCoautor" autofocus>

                                @error('numCoautor')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>

                        </div>{{-- end row--}}

                    </p>
                    <div class="row justify-content-center">
                        <div class="col-md-12">
                            <button type="submit" class="btn btn-primary" style="width:100%">
                                {{ __('Finalizar') }}
                            </button>
                        </div>
                    </div>
                    </form>
                </div>
                </div>
        </div>
    </div>
    
    <div class="row justify-content-center">
        <div class="col-sm-6">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Logo Evento</h5>
                    <h6 class="card-subtitle mb-2 text-muted">Modifique a foto do evento aqui.</h6>
                    <form method="POST" action="{{route('evento.setFotoEvento')}}" enctype="multipart/form-data">
                    @csrf
                    <p class="card-text">
                        <input type="hidden" name="eventoId" value="{{$evento->id}}">

                        <div class="row justify-content-center">
                            <div class="col-sm-12">
                              <label for="fotoEvento">Logo</label>
                              <input type="file" class="form-control-file @error('fotoEvento') is-invalid @enderror" name="fotoEvento" value="{{ old('fotoEvento') }}" id="fotoEvento">
                              @error('fotoEvento')
                                  <span class="invalid-feedback" role="alert">
                                      <strong>{{ $message }}</strong>
                                  </span>
                              @enderror
                            </div>

                        </div>{{-- end row--}}
                    </p>
                    <div class="row justify-content-center">
                        <div class="col-md-12">
                            <button type="submit" class="btn btn-primary" style="width:100%">
                                {{ __('Finalizar') }}
                            </button>
                        </div>
                    </div>
                    </form>
                </div>
                </div>
        </div>
    </div>
</div><!-- Definir Submissões -->
<div>
    @error('comparacaocaracteres')
      @include('componentes.mensagens')
    @enderror
</div>
<div>
    @error('comparacaopalavras')
      @include('componentes.mensagens')
    @enderror
</div>
<div>
    @error('marcarextensao')
      @include('componentes.mensagens')
    @enderror
</div>
<div>
    @error('caracteresoupalavras')
      @include('componentes.mensagens')
    @enderror
</div>
<div>
    @error('semcaractere')
      @include('componentes.mensagens')
    @enderror
</div>
<div>
    @error('sempalavra')
      @include('componentes.mensagens')
    @enderror
</div>
{{-- Modalidade --}}
<div id="divCadastrarModalidades" class="modalidades">
    <div class="row">
        <div class="col-sm-12">
            <h1 class="titulo-detalhes">Cadastrar Modalidade</h1>
        </div>
    </div>
    {{-- row card --}}
    <div class="row justify-content-center">
        <div class="col-sm-6">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Nova Modalidade</h5>
                    <h6 class="card-subtitle mb-2 text-muted">Cadastre uma nova modalidade para o seu evento</h6>
                    <form method="POST" action="{{route('modalidade.store')}}" enctype="multipart/form-data">
                    @csrf
                    <p class="card-text">
                        <input type="hidden" name="eventoId" value="{{$evento->id}}">
                        <div class="row">
                            <div class="col-sm-12">
                                <label for="nomeModalidade" class="col-form-label">*{{ __('Nome') }}</label>

                            </div>
                        </div>
                        <div class="row justify-content-center">
                            <div class="col-sm-12">
                                <input id="nomeModalidade" type="text" class="form-control @error('nomeModalidade') is-invalid @enderror" name="nomeModalidade" value="{{ old('nomeModalidade') }}" required autocomplete="nomeModalidade" autofocus>

                                @error('nomeModalidade')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>

                        </div>{{-- end row--}}

                    </p>

                    {{-- Data: inicioSubmissao | fimSubmissao --}}
                    <div class="row justify-content-center">

                        <div class="col-sm-6">
                            <label for="inicioSubmissao" class="col-form-label">{{ __('Início da Submissão') }}</label>
                            <input id="inicioSubmissao" type="date" class="form-control @error('inicioSubmissao') is-invalid @enderror" name="inicioSubmissao" value="{{ old('inicioSubmissao') }}" autocomplete="inicioSubmissao" autofocus>

                            @error('inicioSubmissao')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="col-sm-6">
                            <label for="fimSubmissao" class="col-form-label">{{ __('Fim da Submissão') }}</label>
                            <input id="fimSubmissao" type="date" class="form-control @error('fimSubmissao') is-invalid @enderror" name="fimSubmissao" value="{{ old('fimSubmissao') }}" autocomplete="fimSubmissao" autofocus>

                            @error('fimSubmissao')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    {{-- end Data: inicioSubmissao | fimSubmissao --}}

                    {{-- Data: inicioRevisao | fimRevisao --}}
                    <div class="row justify-content-center">

                        <div class="col-sm-6">
                            <label for="inicioRevisao" class="col-form-label">{{ __('Início da Revisão') }}</label>
                            <input id="inicioRevisao" type="date" class="form-control @error('inicioRevisao') is-invalid @enderror" name="inicioRevisao" value="{{ old('inicioRevisao') }}" autocomplete="inicioRevisao" autofocus>

                            @error('inicioRevisao')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="col-sm-6">
                            <label for="fimRevisao" class="col-form-label">{{ __('Fim da Revisão') }}</label>
                            <input id="fimRevisao" type="date" class="form-control @error('fimRevisao') is-invalid @enderror" name="fimRevisao" value="{{ old('fimRevisao') }}" autocomplete="fimRevisao" autofocus>

                            @error('fimRevisao')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    {{-- end Data: inicioRevisão | fimRevisao --}}

                    {{-- Data: resultado --}}
                    <div class="row">

                        <div class="col-sm-6">
                            <label for="inicioResultado" class="col-form-label">{{ __('Início do Resultado') }}</label>
                            <input id="inicioResultado" type="date" class="form-control @error('inicioResultado') is-invalid @enderror" name="inicioResultado" value="{{ old('inicioResultado') }}" autocomplete="inicioResultado" autofocus>

                            @error('inicioResultado')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    {{-- end Data: resultado --}}

                    {{-- Inicio - Tipo de submissão --}}
                    <div class="row">

                        <div class="col-sm-6">
                            <label class="col-form-label">{{ __('Restrições de resumo:') }}</label>

                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="limit" id="id-limit-custom_field-account-1-1" value="limit-option1" required>
                                <label class="form-check-label" for="texto">
                                    Quantidade de caracteres 
                                </label>
                                </div>
                                <div class="form-check">
                                <input class="form-check-input" type="radio" name="limit" id="id-limit-custom_field-account-1-2" value="limit-option2" required>
                                <label class="form-check-label" for="arquivo">
                                    Quantidade de palavras 
                                </label>
                            </div>

                            <div class="row">
                                <div class="col-sm-6" id="min-max-caracteres" style="display: none">
                                    <div class="form-group">
                                        <label class="col-form-label">{{ __('Mínimo') }}</label>
                                        <div>
                                          <input class="form-control" type="number" id="min_caracteres" name="mincaracteres">
                                        </div>
                                    </div>
        
                                    <div class="form-group">
                                        <label class="col-form-label">{{ __('Máximo') }}</label>
                                        <div>
                                          <input class="form-control" type="number" id="max_caracteres" name="maxcaracteres">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-sm-6" id="min-max-palavras" style="display: none">
                                    <div class="form-group">
                                        <label class="col-form-label">{{ __('Mínimo') }}</label>
                                        <div>
                                          <input class="form-control" type="number" id="min_palavras" name="minpalavras">
                                        </div>
                                    </div>
        
                                    <div class="form-group">
                                        <label class="col-form-label">{{ __('Máximo') }}</label>
                                        <div>
                                          <input class="form-control" type="number" id="max_palavras" name="maxpalavras">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="form-check" style="margin-top: 10px">
                                <input class="form-check-input incluirarquivo" type="checkbox" name="arquivo" id="id-custom_field-account-1-2">
                                <label class="form-check-label" for="arquivo">
                                    Incluir submissão por arquivo 
                                </label>
                                @error('arquivo')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-6" id="tipo-arquivo" style="display: none">

                            <div class="titulo-detalhes" style="margin-top: 10px"></div>
                            <label class="col-form-label">{{ __('Tipos de extensão aceitas') }}</label>

                            <div class="form-check" style="margin-top: 10px">
                                <input class="form-check-input" type="checkbox" id="defaultCheck1" name="pdf">
                                <label class="form-check-label" for="defaultCheck1">
                                    .pdf
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="defaultCheck1" name="jpg">
                                <label class="form-check-label" for="defaultCheck1">
                                    .jpg
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="defaultCheck1" name="jpeg">
                                <label class="form-check-label" for="defaultCheck1">
                                    .jpeg
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="defaultCheck1" name="png">
                                <label class="form-check-label" for="defaultCheck1">
                                    .png
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="defaultCheck1" name="docx">
                                <label class="form-check-label" for="defaultCheck1">
                                    .docx
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="defaultCheck1" name="odt">
                                <label class="form-check-label" for="defaultCheck1">
                                    .odt
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="row justify-content-center">
                        {{-- Arquivo de Regras  --}}
                        <div class="col-sm-12" style="margin-top: 20px;">
                          <label for="arquivoRegras" class="col-form-label">{{ __('Enviar regras:') }}</label>

                          <div class="custom-file">
                            <input type="file" class="filestyle" data-placeholder="Nenhum arquivo" data-text="Selecionar" data-btnClass="btn-primary-lmts" name="arquivoRegras">
                          </div>
                          <small>O arquivo Selecionado deve ser no formato PDF de até 2mb.</small>
                          @error('arquivoRegras')
                          <span class="invalid-feedback" role="alert" style="overflow: visible; display:block">
                            <strong>{{ $message }}</strong>
                          </span>
                          @enderror
                        </div>
                        {{-- Arquivo de Templates --}}
                        <div class="col-sm-12" id="area-template" style="margin-top: 20px; display:none">
                            <label for="nomeTrabalho" class="col-form-label">{{ __('Enviar template:') }}</label>
  
                            <div class="custom-file">
                              <input type="file" class="filestyle" data-placeholder="Nenhum arquivo" data-text="Selecionar" data-btnClass="btn-primary-lmts" name="arquivoTemplates">
                            </div>
                            <small>O arquivo Selecionado deve ser no formato PDF de até 2mb.</small>
                            @error('arquivoTemplates')
                            <span class="invalid-feedback" role="alert" style="overflow: visible; display:block">
                              <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <br>
                    <div class="row justify-content-center">
                        <div class="col-md-12">
                            <button type="submit" class="btn btn-primary" style="width:100%">
                                {{ __('Finalizar') }}
                            </button>
                        </div>
                    </div>
                    </form>
                </div>
                </div>
        </div>
        <div class="col-sm-6">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Áreas por Modalidade</h5>
                    <h6 class="card-subtitle mb-2 text-muted">Vincule as Áreas de acordo com cada modalidade</h6>
                    <form method="POST" action="{{route('areaModalidade.store')}}">
                    @csrf
                    <p class="card-text">
                        <input type="hidden" name="eventoId" value="{{$evento->id}}">
                        <div class="row justify-content-center">
                            <div class="col-sm-6">
                                <label for="modalidadeId" class="col-form-label">{{ __('Modalidade') }}</label>
                                <select class="form-control @error('modalidadeId') is-invalid @enderror" id="modalidadeId" name="modalidadeId">
                                    <option value="" disabled selected hidden> Modalidade </option>
                                    @foreach($modalidades as $modalidade)
                                    <option value="{{$modalidade->id}}">{{$modalidade->nome}}</option>
                                    @endforeach
                                </select>

                                @error('modalidadeId')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="col-sm-6">
                                <label for="areaId" class="col-form-label">{{ __('Área') }}</label>
                                <select class="form-control @error('areaId') is-invalid @enderror" id="areaId" name="areaId">
                                    <option value="" disabled selected hidden> Área </option>
                                    @foreach($areas as $area)
                                        <option value="{{$area->id}}">{{$area->nome}}</option>
                                    @endforeach
                                </select>

                                @error('areaId')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                    </p>

                    <div class="row justify-content-center">

                        <div class="col-md-12">
                            <button type="submit" class="btn btn-primary" style="width:100%">
                                {{ __('Finalizar') }}
                            </button>
                        </div>
                    </div>
                    </form>

                </div>
            </div>{{-- End card--}}
        </div>
    </div>{{-- end row card --}}
</div>
<div id="divListarModalidades" class="modalidades">
    <div class="row">
        <div class="col-sm-12">
            <h1 class="titulo-detalhes">Listar Modalidades</h1>
        </div>
    </div>

    <div class="row justify-content-center">
        {{-- table modalidades --}}
        <div class="col-sm-6">
            <div class="card">
                <div class="card-body">
                  <h5 class="card-title">Modalidades</h5>
                  <h6 class="card-subtitle mb-2 text-muted">Modalidades cadastradas no seu evento</h6>
                  <p class="card-text">
                    <table class="table table-hover table-responsive-lg table-sm">
                        <thead>
                        <tr>
                            <th scope="col">Nome</th>
                            <th scope="col">Editar</th>
                        </tr>
                        </thead>
                        <tbody>
                            @foreach($modalidades as $modalidade)
                            <tr>
                                <td>{{$modalidade->nome}}</td>
                                <td style="text-align:center">
                                    <a class="botaoAjax" href="#" data-toggle="modal" onclick="modalidadeId({{$modalidade->id}})" data-target="#modalEditarModalidade"><img src="{{asset('img/icons/edit-regular.svg')}}" style="width:20px"></a>
                                </td>
                            </tr>
                            @endforeach


                        </tbody>
                    </table>
                  </p>
                </div>
              </div>

        </div>{{-- end table--}}

        {{-- table modalidades Área--}}
        <div class="col-sm-6">
            <div class="card">
                <div class="card-body">
                  <h5 class="card-title">Áreas por Modalidade</h5>
                  <h6 class="card-subtitle mb-2 text-muted">Áreas correspondentes à cada modalidade do seu evento</h6>
                  <p class="card-text">
                    <table class="table table-hover table-responsive-lg table-sm">
                        <thead>
                          <tr>
                            <th scope="col">Modalidade</th>
                            <th scope="col">Área</th>
                          </tr>
                        </thead>
                        <tbody>
                            @foreach($areaModalidades as $areaModalidade)
                              <tr>
                                <td>{{$areaModalidade->modalidade->nome}}</td>
                                <td>{{$areaModalidade->area->nome}}</td>
                              </tr>
                            @endforeach


                        </tbody>
                      </table>
                  </p>
                </div>
              </div>

        </div>{{-- end table área--}}
    </div>
</div>
    <div id="divClassificacao" class="classificacao">
        <h1>Classificação</h1>
    </div>
    <div id="divAtividades" class="atividades">
        <h1>Atividades</h1>
    </div>

<!-- Área -->
<div id="divCadastrarAreas" style="display: none">
    <div class="row">
        <div class="col-sm-12">
            <h1 class="titulo-detalhes">Cadastrar Áreas</h1>
        </div>
    </div>

    <div class="row justify-content-center">
        <div class="col-sm-5">
            <div class="card">
                <div class="card-body">
                  <h5 class="card-title">Nova Área</h5>
                  <h6 class="card-subtitle mb-2 text-muted">Cadastre uma nova área para o seu evento</h6>
                  <form method="POST" action="{{route('area.store')}}">
                      @csrf
                    <p class="card-text">
                            <input type="hidden" name="eventoId" value="{{$evento->id}}">
                            <div class="row justify-content-center">
                                <div class="col-sm-12">
                                    <label for="nome" class="col-form-label">{{ __('Nome da Área') }}</label>
                                    <input id="nome" type="text" class="form-control @error('nome') is-invalid @enderror" name="nome" value="{{ old('nome') }}" required autocomplete="nome" autofocus>

                                    @error('nome')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                        </p>
                        <div class="row justify-content-center">
                            <div class="col-md-12">
                                <button type="submit" class="btn btn-primary" style="width:100%">
                                    {{ __('Finalizar') }}
                                </button>
                            </div>
                        </div>
                    </form>

                </div>
              </div>{{-- End card--}}
        </div>
    </div>
</div>

<div id="divListarAreas" style="display: none">
    <div class="row">
        <div class="col-sm-12">
            <h1 class="titulo-detalhes">Listar Áreas</h1>
        </div>
    </div>

    <div class="row justify-content-center">

        <div class="col-sm-8">
            <div class="card">
                <div class="card-body">
                  <h5 class="card-title">Áreas</h5>
                  <h6 class="card-subtitle mb-2 text-muted">Áreas cadastradas no seu evento</h6>
                  <p class="card-text">
                    <table class="table table-hover table-responsive-lg table-sm">
                        <thead>
                          <tr>
                            <th scope="col">#</th>
                            <th scope="col">Nome</th>
                            <th scope="col" style="text-align:center">Remover</th>
                          </tr>
                        </thead>
                        <tbody>
                          @foreach($areas as $area)
                            <tr>
                              <th scope="row">{{$area->id}}</th>
                              <td>{{$area->nome}}</td>
                              <td style="text-align:center">
                                <img src="{{asset('img/icons/trash-alt-regular.svg')}}" style="width:15px">
                              </td>
                            </tr>
                          @endforeach
                        </tbody>
                      </table>
                  </p>
                </div>
              </div>
        </div>
    </div>
</div>
<!-- Revisores -->
<div id="divCadastrarRevisores" style="display: none">

    <div class="row">
        <div class="col-sm-12">
            <h1 class="titulo-detalhes">Cadastrar Revisores</h1>
        </div>
    </div>

    <div class="row justify-content-center">
        <div class="col-sm-10">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Revisores</h5>
                    <h6 class="card-subtitle mb-2 text-muted">Cadastre um novo revisor no seu evento</h6>
                    <form method="POST" action="{{route('revisor.store')}}">
                        @csrf
                        <p class="card-text">
                            <input type="hidden" name="eventoId" value="{{$evento->id}}">
                            <div class="row justify-content-center">
                                <div class="col-sm-3">
                                    <label for="nomeRevisor" class="col-form-label">{{ __('Nome do Revisor') }}</label>
                                    <input id="nomeRevisor" type="text" class="form-control @error('nomeRevisor') is-invalid @enderror" name="nomeRevisor" value="{{ old('nomeRevisor') }}" required autocomplete="nomeRevisor" autofocus>

                                    @error('nomeRevisor')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="col-sm-3">
                                    <label for="emailRevisor" class="col-form-label">{{ __('Email do Revisor') }}</label>
                                    <input id="emailRevisor" type="text" class="form-control @error('emailRevisor') is-invalid @enderror" name="emailRevisor" value="{{ old('emailRevisor') }}" required autocomplete="emailRevisor" autofocus>

                                    @error('emailRevisor')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="col-sm-3">
                                    <label for="areaRevisor" class="col-form-label">{{ __('Área') }}</label>
                                    <select class="form-control @error('areaRevisor') is-invalid @enderror" id="areaRevisor" name="areaRevisor">
                                        <option value="" disabled selected hidden>-- Área --</option>
                                        @foreach($areas as $area)
                                        <option value="{{$area->id}}">{{$area->nome}}</option>
                                        @endforeach
                                    </select>

                                    @error('areaRevisor')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="col-sm-3">
                                    <label for="modalidadeRevisor" class="col-form-label">{{ __('Modalidade') }}</label>
                                    <select class="form-control @error('modalidadeRevisor') is-invalid @enderror" id="modalidadeRevisor" name="modalidadeRevisor">
                                        <option value="" disabled selected hidden>-- Modalidade --</option>
                                        @foreach($modalidades as $modalidade)
                                        <option value="{{$modalidade->id}}">{{$modalidade->nome}}</option>
                                        @endforeach
                                    </select>

                                    @error('modalidadeRevisor')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                        </p>
                        <div class="row justify-content-center">
                            <div class="col-md-12">
                                <button type="submit" class="btn btn-primary" style="width:100%">
                                    {{ __('Finalizar') }}
                                </button>
                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>




</div>
<div id="divListarRevisores" style="display: none">

    <div class="row">
        <div class="col-sm-12">
            <h1 class="titulo-detalhes">Listar Revisores</h1>
        </div>
    </div>

    <div class="row justify-content-center">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-body">
                  <h5 class="card-title">Revisores</h5>
                  <h6 class="card-subtitle mb-2 text-muted">Revisores cadastrados no seu evento</h6>
                  <p class="card-text">
                    <table class="table table-hover table-responsive-lg table-sm">
                        <thead>
                          <tr>
                            <th scope="col">Nome</th>
                            <th scope="col">Área</th>
                            <th scope="col" style="text-align:center">Em Andamento</th>
                            <th scope="col" style="text-align:center">Finalizados</th>
                            <th scope="col" style="text-align:center">Visualizar</th>
                            <th scope="col" style="text-align:center">Lembrar</th>
                          </tr>
                        </thead>
                        <tbody>
                          @foreach($revisores as $revisor)
                            <tr>
                              <td>{{$revisor->user->email}}</td>
                              <td>{{$revisor->area->nome}}</td>
                              <td style="text-align:center">{{$revisor->correcoesEmAndamento}}</td>
                              <td style="text-align:center">{{$revisor->trabalhosCorrigidos}}</td>
                              <td style="text-align:center">
                                <a href="#" data-toggle="modal" data-target="#modalRevisor">
                                  <img src="{{asset('img/icons/eye-regular.svg')}}" style="width:20px">
                                </a>
                              </td>
                              <td style="text-align:center">
                                  <form action="{{route('revisor.email')}}" method="POST" >
                                    @csrf
                                      <input type="hidden" name="user" value= '@json($revisor->user)'>
                                      <button class="btn btn-primary btn-sm" type="submit">
                                          Enviar e-mail
                                      </button>
                                  </form>
                              </td>
                            </tr>
                          @endforeach
                        </tbody>
                      </table>
                      @if(count($revs) > 0 && isset($revs))
                        <form action="{{route('revisor.emailTodos')}}" method="POST" >
                            @csrf
                              <input type="hidden" name="revisores" value='@json($revs)'>
                              <button class="btn btn-primary btn-sm" type="submit">
                                  Lembrar todos
                              </button>
                          </form>
                      @endif
                      
                  </p>

                </div>
              </div>
        </div>
    </div>
</div>

{{-- Evento --}}
<div id="divEditarEtiquetas" class="eventos" style="display: none">
    <div class="row">
        <div class="col-sm-12">
            <h1 class="titulo-detalhes">Editar Etiquetas</h1>
        </div>
    </div>
    {{-- row card - Edição de Etiquetas --}}

    <div class="row justify-content-center">
        <div class="col-sm-10">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Modelo Atual - Card de Eventos</h5>
                    <p class="card-text">
                    <form method="POST" id="formCardEventos" action="{{route('etiquetas.update', $evento->id)}}">
                        @csrf

                        <div class="row justify-content-left">
                            
                            <div class="col-sm-auto">
                                <h4 id="classeh4">{{$etiquetas->etiquetanomeevento}}:</h4>
                            </div>
                            <a><img src="{{asset('img/icons/edit-regular.svg')}}" class="botaoAjax" id="botao-editar-nome" style="width:20px"></a>
                            {{-- <button type="button" id="botao-editar-nome" class="btn btn-outline-dark">Editar</button> --}}
                            <div class="col-sm-3" id="etiqueta-nome-evento" style="display: none">
                                <input type="text" class="form-control etiquetanomeevento" id="etiquetanomeevento" name="etiquetanomeevento" placeholder="Editar Etiqueta">
                            </div>

                        </div>
                        <div class="row justify-content-left">
                            <div class="col-sm-12">
                                <p>{{$evento->nome}}</p>
                            </div>
                        </div>
                        
                        
                        <div class="row justify-content-left">
            
                            <div class="col-sm-auto">
                                <h4 id="classeh5">{{$etiquetas->etiquetadescricaoevento}}:</h4>
                            </div>
                            <a><img src="{{asset('img/icons/edit-regular.svg')}}" class="botaoAjax" id="botao-editar-descricao" style="width:20px"></a>
                            {{-- <button type="button" id="botao-editar-descricao" class="btn btn-outline-dark">Editar</button> --}}
                            <div class="col-sm-3" id="etiqueta-descricao-evento" style="display: none">
                                <input type="text" class="form-control" id="etiquetadescricaoevento" name="etiquetadescricaoevento" placeholder="Editar Etiqueta">
                            </div>
                        </div>
                        <div class="row justify-content-center">
                            <div class="col-sm-12">
                                <p>{{$evento->descricao}}</p>
                            </div>
                        </div>

                        <div class="row justify-content-left">
                            <div class="col-sm-auto">
                                <h4 id="classeh6">{{$etiquetas->etiquetatipoevento}}:</h4>
                            </div>
                            <a><img src="{{asset('img/icons/edit-regular.svg')}}" class="botaoAjax" id="botao-editar-tipo" style="width:20px"></a>
                            {{-- <button type="button" id="botao-editar-tipo" class="btn btn-outline-dark">Editar</button> --}}
                            <div class="col-sm-3" id="etiqueta-tipo-evento" style="display: none">
                                <input type="text" class="form-control" id="etiquetatipoevento" name="etiquetatipoevento" placeholder="Editar Etiqueta">
                            </div>
                        </div>
                        <div class="row justify-content-center">
                            <div class="col-sm-12">
                                <p>{{$evento->tipo}}</p>
                            </div>
                        </div>
                        
                        <div class="row justify-content-left">
                            <div class="col-sm-auto info-evento">
                                <h4 id="classeh7">{{$etiquetas->etiquetadatas}}:</h4>
                            </div>
                            <a><img src="{{asset('img/icons/edit-regular.svg')}}" class="botaoAjax" id="botao-editar-datas" style="width:20px"></a>
                            {{-- <button type="button" id="botao-editar-datas" class="btn btn-outline-dark">Editar</button> --}}
                            <div class="col-sm-3" id="etiqueta-data-evento" style="display: none">
                                <input type="text" class="form-control" id="etiquetadatas" name="etiquetadatas" placeholder="Editar Etiqueta">
                            </div>
                        </div>
                        <div class="row justify-content-left">
                            <div class="col-sm-12">
                                <p>
                                    <img class="" alt="">
                                    Data: --/--/-- * --/--/--
                                </p>
                            </div>
                        </div>
                        
                        <div class="row justify-content-left">
                            <div class="col-sm-auto info-evento">
                                <h4 id="classeh8">{{$etiquetas->etiquetasubmissoes}}:</h4>
                            </div>
                            <a><img src="{{asset('img/icons/edit-regular.svg')}}" class="botaoAjax" id="botao-editar-submissoes" style="width:20px"></a>
                            {{-- <button type="button" id="botao-editar-submissoes" class="btn btn-outline-dark">Editar</button> --}}
                            <div class="col-sm-3" id="etiqueta-submissoes-evento" style="display: none">
                                <input type="text" class="form-control" id="etiquetasubmissoes" name="etiquetasubmissoes" placeholder="Editar Etiqueta">
                            </div>
                        </div>
                        <div class="row justify-content-center">
                            <div class="col-sm-12">
                                <h6>Modalidade: Nome da modalidade aqui</h6>
                                <p>
                                    <img class="" alt="">
                                    Submissão datas: --/--/-- * --/--/--
                                </p>
                                <p>
                                    <img class="" alt="">
                                    Revisão datas: --/--/-- * --/--/--
                                </p>
                                <p>
                                    <img class="" alt="">
                                    Resultado data: --/--/--
                                </p>
                            </div>
                        </div>

                        <div class="row justify-content-left">
                            <div class="col-sm-auto">
                                <a>
                                    <img class="" src="{{asset('img/icons/file-download-solid.svg')}}" style="width:20px">
                                </a>
                                <label for="nomeTrabalho" class="col-form-label" id="classeh9">{{$etiquetas->etiquetabaixarregra}}:</label>
                                <a><img src="{{asset('img/icons/edit-regular.svg')}}" class="botaoAjax" id="botao-editar-etiqueta-regra" style="width:20px"></a>
                                {{-- <button type="button" id="botao-editar-etiqueta-regra" class="btn btn-outline-dark">Editar</button> --}}
                            </div>
                            <div class="col-sm-auto" id="etiqueta-baixar-regra-evento" style="display: none">
                                <input type="text" class="form-control" id="etiquetabaixarregra" name="etiquetabaixarregra" placeholder="Editar Etiqueta">
                            </div>
                        </div>

                        <div class="row justify-content-left">
                            <div class="col-sm-auto">
                                <a>
                                    <img class="" src="{{asset('img/icons/file-download-solid.svg')}}" style="width:20px">
                                </a>
                                <label for="nomeTrabalho" class="col-form-label" id="classeh10">{{$etiquetas->etiquetabaixartemplate}}:</label>
                                <a><img src="{{asset('img/icons/edit-regular.svg')}}" class="botaoAjax" id="botao-editar-etiqueta-template" style="width:20px"></a>
                                {{-- <button type="button" id="botao-editar-etiqueta-template" class="btn btn-outline-dark">Editar</button> --}}
                            </div>
                            <div class="col-sm-auto" id="etiqueta-baixar-template-evento" style="display: none">
                                <input type="text" class="form-control" id="etiquetabaixartemplate" name="etiquetabaixartemplate" placeholder="Editar Etiqueta">
                            </div>
                        </div>

                        <div class="row justify-content-left" style="margin-top: 20px">
                            <div class="col-sm-auto info-evento">
                                <h4 id="classeh11">{{$etiquetas->etiquetaenderecoevento}}:</h4>
                            </div>
                            <a><img src="{{asset('img/icons/edit-regular.svg')}}" class="botaoAjax" id="botao-editar-endereco" style="width:20px"></a>
                            {{-- <button type="button" id="botao-editar-endereco" class="btn btn-outline-dark">Editar</button> --}}
                            <div class="col-sm-auto" id="etiqueta-endereco-evento" style="display: none">
                                <input type="text" class="form-control" id="etiquetaenderecoevento" name="etiquetaenderecoevento" placeholder="Editar Etiqueta">
                            </div>
                        </div>
                        <div class="row justify-content-center">
                            <div class="col-sm-12"  style="margin-top: 10px">
                                Local do evento aqui: {{$evento->endereco->rua}}, {{$evento->endereco->numero}} - {{$evento->endereco->cidade}} / {{$evento->endereco->uf}}.
                            </div>
                        </div>

                        <div class="row justify-content-left" style="margin-top: 10px">
                            <div class="col-sm-auto info-evento">
                                <h4 id="classeh12">{{$etiquetas->etiquetamoduloinscricao}}:</h4>
                            </div>
                            <a><img src="{{asset('img/icons/edit-regular.svg')}}" class="botaoAjax" id="botao-editar-modulo-inscricao" style="width:20px"></a>
                            {{-- <button type="button" id="botao-editar-modulo-inscricao" class="btn btn-outline-dark">Editar</button> --}}
                            <div class="col-sm-3" id="etiqueta-modulo-inscricao-evento" style="display: none">
                                <input type="text" class="form-control" id="etiquetamoduloinscricao" name="etiquetamoduloinscricao" placeholder="Editar Etiqueta">
                            </div>
                        </div>
                        <p style="margin-top: 10px">
                            Informações sobre inscrições
                        </p>

                        <div class="row justify-content-left">
                            <div class="col-sm-auto info-evento">
                                <h4 id="classeh13">{{$etiquetas->etiquetamoduloprogramacao}}:</h4>
                            </div>
                            <a><img src="{{asset('img/icons/edit-regular.svg')}}" class="botaoAjax" id="botao-editar-modulo-programacao" style="width:20px"></a>
                            {{-- <button type="button" id="botao-editar-modulo-programacao" class="btn btn-outline-dark">Editar</button> --}}
                            <div class="col-sm-3" id="etiqueta-modulo-programacao-evento" style="display: none">
                                <input type="text" class="form-control" id="etiquetamoduloprogramacao" name="etiquetamoduloprogramacao" placeholder="Editar Etiqueta">
                            </div>
                        </div>
                        <p style="margin-top: 10px">
                            Informações sobre programação
                        </p>

                        <div class="row justify-content-left">
                            <div class="col-sm-auto info-evento">
                                <h4 id="classeh14">{{$etiquetas->etiquetamoduloorganizacao}}:</h4>
                            </div>
                            <a><img src="{{asset('img/icons/edit-regular.svg')}}" class="botaoAjax" id="botao-editar-modulo-organizacao" style="width:20px"></a>
                            {{-- <button type="button" id="botao-editar-modulo-organizacao" class="btn btn-outline-dark">Editar</button> --}}
                            <div class="col-sm-3" id="etiqueta-modulo-organizacao-evento" style="display: none">
                                <input type="text" class="form-control" id="etiquetamoduloorganizacao" name="etiquetamoduloorganizacao" placeholder="Editar Etiqueta">
                            </div>
                        </div>
                        <p>
                            Informações sobre a organização
                        </p>
                    </form>
                    <div class="row justify-content-center">
                        <div class="col-md-6">
                            <form method="POST" id="formCardEventosPadrao" action="{{route('etiquetas.update', $evento->id)}}">
                                @csrf
                                <input type="hidden" name="etiquetanomeevento"          value="Nome">
                                <input type="hidden" name="etiquetatipoevento"          value="Tipo">
                                <input type="hidden" name="etiquetadescricaoevento"     value="Descrição">
                                <input type="hidden" name="etiquetadatas"               value="Realização">
                                <input type="hidden" name="etiquetasubmissoes"          value="Submissões">
                                <input type="hidden" name="etiquetaenderecoevento"      value="Endereço">
                                <input type="hidden" name="etiquetamoduloinscricao"     value="Inscrições">
                                <input type="hidden" name="etiquetamoduloprogramacao"   value="Programação">
                                <input type="hidden" name="etiquetamoduloorganizacao"   value="Organização">
                                <input type="hidden" name="etiquetabaixarregra"         value="Regras">
                                <input type="hidden" name="etiquetabaixartemplate"      value="Template">
                                
                                <button type="submit" class="btn btn-primary" form="formCardEventosPadrao" onclick="return default_edicaoCardEvento()" style="width:100%">
                                    {{ __('Retornar ao Padrão') }}
                                </button>
                            </form>
                        </div>
                        <div class="col-md-6">
                            <button type="submit" class="btn btn-primary" form="formCardEventos" style="width:100%">
                                {{ __('Finalizar') }}
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>{{-- end row card --}}

    {{-- Habilitar Modulos --}}
    <div class="row justify-content-center">
        <div class="col-sm-6">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Módulos</h5>
                    <h6 class="card-subtitle mb-2 text-muted">Escolha quais módulos serão exibidos</h6>
                    <form method="POST" action="{{route('exibir.modulo', $evento->id)}}">
                    @csrf
                    
                    <p class="card-text">
                        <input type="hidden" name="modinscricao" value="false" id="modinscricao">
                        <div class="row">
                            <div class="col-sm-12">
                                <label for="modinscricao" class="col-form-label">{{ __('Inscrições') }}</label>
                            </div>
                        </div>
                        <div class="row justify-content-center">
                            <div class="col-sm-12">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" @if($etiquetas->modinscricao) checked @endif name="modinscricao" id="modinscricao">
                                    <label class="form-check-label" for="modinscricao">
                                      Habilitar
                                    </label>
                                </div>
    
                                @error('modinscricao')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>{{-- end row--}}
                    </p>
    
                    <p class="card-text">
                      <input type="hidden" name="modprogramacao" value="false" id="modprogramacao">
                      <div class="row">
                          <div class="col-sm-12">
                              <label for="modprogramacao" class="col-form-label">{{ __('Programação') }}</label>
                          </div>
                      </div>
                      <div class="row justify-content-center">
                          <div class="col-sm-12">
                              <div class="form-check">
                                  <input class="form-check-input" type="checkbox" @if($etiquetas->modprogramacao) checked @endif name="modprogramacao" id="modprogramacao">
                                  <label class="form-check-label" for="modprogramacao">
                                    Habilitar
                                  </label>
                              </div>
    
                              @error('modprogramacao')
                              <span class="invalid-feedback" role="alert">
                                  <strong>{{ $message }}</strong>
                              </span>
                              @enderror
                          </div>
    
                      </div>{{-- end row--}}
    
                    </p>
    
                    <p class="card-text">
                      <input type="hidden" name="modorganizacao" value="false" id="modorganizacao">
                      <div class="row">
                          <div class="col-sm-12">
                              <label for="modorganizacao" class="col-form-label">{{ __('Organização e Apoio') }}</label>
                          </div>
                      </div>
                      <div class="row justify-content-center">
                          <div class="col-sm-12">
                              
                              <div class="form-check">
                                  <input class="form-check-input" type="checkbox" @if($etiquetas->modorganizacao) checked @endif name="modorganizacao" id="modorganizacao">
                                  <label class="form-check-label" for="modorganizacao">
                                    Habilitar
                                  </label>
                              </div>
    
                              @error('modorganizacao')
                              <span class="invalid-feedback" role="alert">
                                  <strong>{{ $message }}</strong>
                              </span>
                              @enderror
                          </div>
    
                      </div>{{-- end row--}}
    
                    </p>
    
                    <p class="card-text">
                      <input type="hidden" name="modsubmissao" value="false" id="modsubmissao">
                      <div class="row">
                          <div class="col-sm-12">
                              <label for="modsubmissao" class="col-form-label">{{ __('Submissões de Trabalhos') }}</label>
                          </div>
                      </div>
                      <div class="row justify-content-center">
                          <div class="col-sm-12">
                              
                              <div class="form-check">
                                  <input class="form-check-input" type="checkbox" @if($etiquetas->modsubmissao) checked @endif name="modsubmissao" id="modsubmissao">
                                  <label class="form-check-label" for="modsubmissao">
                                    Habilitar
                                  </label>
                              </div>
    
                              @error('modsubmissao')
                              <span class="invalid-feedback" role="alert">
                                  <strong>{{ $message }}</strong>
                              </span>
                              @enderror
                          </div>
    
                      </div>{{-- end row--}}
    
                    </p>
                    <div class="row justify-content-center">
                        <div class="col-md-12">
                            <button type="submit" class="btn btn-primary" style="width:100%">
                                {{ __('Finalizar') }}
                            </button>
                        </div>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    {{-- Fim --}}
  
</div>

<div id="divCadastrarCriterio" class="comissao">
    <div class="row">
        <div class="col-sm-12">
            <h1 class="titulo-detalhes">Cadastrar Critério</h1>
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-sm-8">
            <div class="card">
                <div class="card-body">
                  <h5 class="card-title">Novo Critério</h5>
                  <h6 class="card-subtitle mb-2 text-muted">Cadastre um novo critério por modalidade</h6>
                  <form action="{{route('cadastrar.criterio')}}" method="POST">
                    @csrf
                    <input type="hidden" name="eventoId" value="{{ $evento->id ?? '' }}">
                    <p class="card-text">
                        <div class="row justify-content-right">
                            <div class="col-sm-6">
                                <label for="modalidade" class="col-form-label">{{ __('Escolha a Modalidade') }}</label>
                                <select class="form-control @error('modalidade') is-invalid @enderror" id="modalidade" name="modalidade">
                                    <option value="" disabled selected hidden>-- Modalidade --</option>
                                    @foreach($modalidades as $modalidade)
                                    <option value="{{$modalidade->id}}">{{$modalidade->nome}}</option>
                                    @endforeach
                                </select>

                                @error('modalidade')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row justify-content-center">
                            <div class="col-sm-12">
                              <div id="criterios">
  
                              </div>
                              <a href="#" class="btn btn-primary" id="addCriterio" style="width:100%;margin-top:10px">Novo</a>
                            </div>
                        </div>
                    </p>
                    <div class="row justify-content-center">
                        <div class="col-md-12">
                            <button type="submit" class="btn btn-primary" style="width:100%">
                                {{ __('Finalizar') }}
                            </button>
                        </div>
                    </div>

                    </form>
                </div>
              </div>{{-- end card--}}
        </div>
    </div>
</div>{{-- End cadastrar Comissão --}}

<div id="divListarCriterio" class="comissao">
    <div class="row">
        <div class="col-sm-12">
            <h1 class="titulo-detalhes">Listar Critérios</h1>
        </div>
    </div>

    <div class="row justify-content-center">
        <div class="col-sm-6">
            <div class="card">
                <div class="card-body">
                  <h5 class="card-title">Critérios</h5>
                  <h6 class="card-subtitle mb-2 text-muted">Critérios cadastrados por modalidades</h6>
                  <p class="card-text">
                    <table class="table table-hover table-responsive-lg table-sm">
                        <thead>
                        <tr>
                            <th scope="col">Nome</th>
                            <th scope="col">Peso</th>
                            <th scope="col">Modalidade</th>
                            <th scope="col">Editar</th>
                        </tr>
                        </thead>
                        <tbody>
                            @foreach($criterios as $criterio)
                                @foreach ($modalidades as $modalidade)
                                    @if ($modalidade->id == $criterio->modalidadeId)
                                        <tr>
                                            <td>{{$criterio->nome}}</td>
                                            <td>{{$criterio->peso}}</td>
                                            <td>{{$modalidade->nome}}</td>
                                            <td style="text-align:center">
                                                <a class="botaoAjax" href="#" data-toggle="modal" onclick="criterioId({{$criterio->id}})" data-target="#modalEditarCriterio"><img src="{{asset('img/icons/edit-regular.svg')}}" style="width:20px"></a>
                                            </td>
                                        </tr>
                                    @endif
                                @endforeach
                            @endforeach
                        </tbody>
                    </table>
                  </p>
                </div>
            </div>
        </div>
    </div>
</div>


{{-- Submissão de Trabalhos - edição de etiquetas --}}
<div id="divEditarEtiquetasSubTrabalho" class="eventos" style="display: none">
    <div class="row">
        <div class="col-sm-12">
            <h1 class="titulo-detalhes">Editar Etiquetas</h1>
        </div>
    </div>
    
    <div class="row justify-content-center">
        <div class="col-sm-10">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Modelo Atual - Form de Submissão de Trabalhos</h5>
                    <p class="card-text">
                    <form id="formSubmTrabaEtiquetas" method="POST" action="{{route('etiquetas_sub_trabalho.update', $evento->id)}}">
                    @csrf
                    <?php
                        $ordemCampos = explode(",", $etiquetasSubTrab->ordemCampos);
                    ?>
                    @foreach ($ordemCampos as $indice)
                        @if ($indice == "etiquetatitulotrabalho")
                            <div class="card" id="bisavo">
                                <div class="card-body">
                                    <div class="row" id="1" value="1">
                                        <div class="col-sm-auto">
                                            <label for="nomeTrabalho" class="col-form-label" id="classeh15">{{$etiquetasSubTrab->etiquetatitulotrabalho}}:</label>
                                        </div>
                                        <a><img src="{{asset('img/icons/edit-regular.svg')}}" class="botaoAjax" id="botao-editar-titulo" style="width:20px"></a>
                                        {{-- <button type="button" id="botao-editar-titulo" class="btn btn-outline-dark">Editar</button> --}}
                                        <div class="col-sm-3" id="etiqueta-titulo-trabalho" style="display: none">
                                            <input type="text" class="form-control" id="etiquetatitulotrabalho" name="etiquetatitulotrabalho" placeholder="Editar Etiqueta">
                                        </div>
                                        <a class="move-up"><img src="{{asset('img/icons/sobe.png')}}" id="antesTitulo" style="width:20px; margin-left:10px"></a>
                                        <a class="move-down"><img src="{{asset('img/icons/desce.png')}}" id="depoisTitulo" style="width:20px"></a>
                                        <input id="nomeTrabalho" type="text" class="form-control" style="margin-top: 10px" disabled><br/>
                                    </div>
                                </div>
                            </div>
                        @endif
                        @if ($indice == "etiquetaautortrabalho")
                            <div class="card" id="bisavo">
                                <div class="card-body">
                                    <div class="row justify-content-left" id="2" style="margin-top: 10px">
                                        <div class="col-sm-auto">
                                            <label for="nomeTrabalho" class="col-form-label" id="classeh16">{{$etiquetasSubTrab->etiquetaautortrabalho}}:</label>
                                        </div>
                                        <a><img src="{{asset('img/icons/edit-regular.svg')}}" class="botaoAjax" id="botao-editar-autor" style="width:20px"></a>
                                        {{-- <button type="button" id="botao-editar-autor" class="btn btn-outline-dark">Editar</button> --}}
                                        <div class="col-sm-3" id="etiqueta-autor-trabalho" style="display: none">
                                            <input type="text" class="form-control" style="margin-top: 10px" id="etiquetaautortrabalho" name="etiquetaautortrabalho" placeholder="Editar Etiqueta">
                                        </div>
                                        <a class="move-up"><img src="{{asset('img/icons/sobe.png')}}" id="antesAutor" style="width:20px; margin-left:10px"></a>
                                        <a class="move-down"><img src="{{asset('img/icons/desce.png')}}" id="depoisAutor" style="width:20px"></a>
                                        <input class="form-control" type="text" style="margin-top: 10px" disabled><br/>
                                    </div>
                                </div>
                            </div>
                        @endif
                        @if ($indice == "etiquetacoautortrabalho")
                            <div class="card" id="bisavo">
                                <div class="card-body">
                                    <div class="row justify-content-left" id="3" style="margin-top: 10px">
                                        <div class="col-sm-auto">
                                        <a href="#" class="btn btn-primary" id="classeh17" style="width:100%;margin-top:10px" disabled>{{$etiquetasSubTrab->etiquetacoautortrabalho}}:</a>
                                        </div>
                                        <a><img src="{{asset('img/icons/edit-regular.svg')}}" class="botaoAjax" id="botao-editar-coautor" style="width:20px"></a>
                                        {{-- <button type="button" id="botao-editar-coautor" class="btn btn-outline-dark">Editar</button> --}}
                                        <div class="col-sm-3" id="etiqueta-coautor-trabalho" style="display: none">
                                            <input type="text" class="form-control" id="etiquetacoautortrabalho" name="etiquetacoautortrabalho" placeholder="Editar Etiqueta">
                                        </div>
                                        <a class="move-up"><img src="{{asset('img/icons/sobe.png')}}" id="antesAutor" style="width:20px; margin-left:10px"></a>
                                        <a class="move-down"><img src="{{asset('img/icons/desce.png')}}" id="depoisAutor" style="width:20px"></a>
                                    </div>
                                </div>
                            </div>
                        @endif
                        @if ($indice == "etiquetaresumotrabalho")
                            <div class="card" id="bisavo">
                                <div class="card-body">
                                    <div class="row justify-content-left">
                                        <div class="col-sm-auto">
                                            <label for="resumo" class="col-form-label" id="classeh18">{{$etiquetasSubTrab->etiquetaresumotrabalho}}:</label>
                                        </div>
                                        <a><img src="{{asset('img/icons/edit-regular.svg')}}" class="botaoAjax" id="botao-editar-resumo" style="width:20px"></a>
                                        {{-- <button type="button" id="botao-editar-resumo" class="btn btn-outline-dark">Editar</button> --}}
                                        <div class="col-sm-auto" id="etiqueta-resumo-trabalho" style="display: none">
                                            <input type="text" class="form-control" id="etiquetaresumotrabalho" name="etiquetaresumotrabalho" placeholder="Editar Etiqueta">
                                        </div>
                                        <a class="move-up"><img src="{{asset('img/icons/sobe.png')}}" id="antesAutor" style="width:20px; margin-left:10px"></a>
                                        <a class="move-down"><img src="{{asset('img/icons/desce.png')}}" id="depoisAutor" style="width:20px"></a>
                                        <textarea id="resumo" class="char-count form-control @error('resumo') is-invalid @enderror" data-ls-module="charCounter" style="margin-top: 10px" disabled></textarea>
                                        <p class="text-muted"><small><span name="resumo">0</span></small></p>
                                    </div>
                                </div>
                            </div>
                        @endif
                        @if ($indice == "etiquetaareatrabalho")
                            <div class="card" id="bisavo">
                                <div class="card-body">
                                    <!-- Areas -->
                                    <div class="row justify-content-left">
                                        <div class="col-auto">
                                            <label for="area" class="col-form-label" id="classeh19">{{$etiquetasSubTrab->etiquetaareatrabalho}}:</label>
                                        </div>
                                        <a><img src="{{asset('img/icons/edit-regular.svg')}}" class="botaoAjax" id="botao-editar-area" style="width:20px"></a>
                                        {{-- <button type="button" id="botao-editar-area" class="btn btn-outline-dark">Editar</button> --}}
                                        <div class="col-sm-auto" id="etiqueta-area-trabalho" style="display: none">
                                            <input type="text" class="form-control" id="etiquetaareatrabalho" name="etiquetaareatrabalho" placeholder="Editar Etiqueta">
                                        </div>
                                        <a class="move-up"><img src="{{asset('img/icons/sobe.png')}}" id="antesAutor" style="width:20px; margin-left:10px"></a>
                                        <a class="move-down"><img src="{{asset('img/icons/desce.png')}}" id="depoisAutor" style="width:20px"></a>
                                        <select class="form-control @error('area') is-invalid @enderror" id="area" name="areaId" style="margin-top: 10px" disabled>
                                            <option value="" disabled selected hidden>-- Área --</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        @endif
                        @if ($indice == "etiquetauploadtrabalho")
                            <div class="card" id="bisavo">
                                <div class="card-body">
                                    <div class="row justify-content-left">
                                        {{-- Arquivo --}}
                                        <div class="col-sm-auto">
                                            <label for="nomeTrabalho" class="col-form-label" id="classeh20">{{$etiquetasSubTrab->etiquetauploadtrabalho}}:</label>
                                        </div>
                                        <a><img src="{{asset('img/icons/edit-regular.svg')}}" class="botaoAjax" id="botao-editar-upload" style="width:20px"></a>
                                        {{-- <button type="button" id="botao-editar-upload" class="btn btn-outline-dark">Editar</button> --}}
                                        <div class="col-sm-auto" id="etiqueta-upload-trabalho" style="display: none">
                                            <input type="text" class="form-control" id="etiquetauploadtrabalho" name="etiquetauploadtrabalho" placeholder="Editar Etiqueta">
                                        </div>
                                        <a class="move-up"><img src="{{asset('img/icons/sobe.png')}}" id="antesAutor" style="width:20px; margin-left:10px"></a>
                                        <a class="move-down"><img src="{{asset('img/icons/desce.png')}}" id="depoisAutor" style="width:20px"></a>
                                    </div>
                                    <div class="custom-file" style="margin-top: 10px">
                                        <input type="file" class="filestyle" data-placeholder="Nenhum arquivo" data-text="Selecionar" data-btnClass="btn-primary-lmts" disabled>
                                    </div>
                                </div>
                            </div>
                        @endif
                        @if ($indice == "etiquetacampoextra1")
                            <div class="card" id="bisavo">
                                <div class="card-body">
                                    <div class="form-group row">
                                        <input type="hidden" name="checkcampoextra1" value="false" id="checkcampoextra1">
                                        <label for="etiquetacampoextra1" class="col-sm-auto col-form-label" id="classeh21">{{$etiquetasSubTrab->etiquetacampoextra1}}:</label>
                                        <div class="col-sm-auto">
                                        <input type="text" class="form-control" id="etiquetacampoextra1" name="etiquetacampoextra1" placeholder="Editar Etiqueta">
                                        </div>
                                        <div class="form-group col-sm-3">
                                            <select class="form-control" id="exampleFormControlSelect1" name="select_campo1">
                                            @if ($etiquetasSubTrab->tipocampoextra1 == "textosimples")
                                                <option value="textosimples" selected>Texto Simples</option>
                                                <option value="textogrande">Texto grande</option>
                                                <option value="upload">Upload</option>
                                            @elseif ($etiquetasSubTrab->tipocampoextra1 == "textogrande")
                                                <option value="textosimples">Texto Simples</option>
                                                <option value="textogrande" selected>Texto grande</option>
                                                <option value="upload">Upload</option>
                                            @elseif ($etiquetasSubTrab->tipocampoextra1 == "upload")
                                                <option value="textosimples">Texto Simples</option>
                                                <option value="textogrande">Texto grande</option>
                                                <option value="upload" selected>Upload</option>
                                            @else
                                                <option value="textosimples" selected>Texto Simples</option>
                                                <option value="textogrande">Texto grande</option>
                                                <option value="upload" selected>Upload</option>
                                            @endif
                                            </select>
                                        </div>
                                        <div class="form-group col-sm-2">
                                            <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="gridCheck" @if($etiquetasSubTrab->checkcampoextra1) checked @endif name="checkcampoextra1">
                                            <label class="form-check-label" for="gridCheck">
                                                Exibir
                                            </label>
                                            </div>
                                        </div>
                                        <a class="move-up"><img src="{{asset('img/icons/sobe.png')}}" id="antesAutor" style="width:20px; margin-left:10px"></a>
                                        <a class="move-down"><img src="{{asset('img/icons/desce.png')}}" id="depoisAutor" style="width:20px"></a>
                                    </div>
                                </div>
                            </div>
                        @endif
                        @if ($indice == "etiquetacampoextra2")
                            <div class="card" id="bisavo">
                                <div class="card-body">
                                    <div class="form-group row">
                                        <input type="hidden" name="checkcampoextra2" value="false" id="checkcampoextra2">
                                        <label for="etiquetacampoextra2" class="col-sm-auto col-form-label" id="classeh22">{{$etiquetasSubTrab->etiquetacampoextra2}}:</label>
                                        <div class="col-sm-auto">
                                        <input type="text" class="form-control" id="etiquetacampoextra2" name="etiquetacampoextra2" placeholder="Editar Etiqueta">
                                        </div>
                                        <div class="form-group col-sm-3">
                                            <select class="form-control" id="exampleFormControlSelect1" name="select_campo2">
                                                @if ($etiquetasSubTrab->tipocampoextra2 == "textosimples")
                                                <option value="textosimples" selected>Texto Simples</option>
                                                <option value="textogrande">Texto grande</option>
                                                <option value="upload">Upload</option>
                                                @elseif ($etiquetasSubTrab->tipocampoextra2 == "textogrande")
                                                <option value="textosimples">Texto Simples</option>
                                                <option value="textogrande" selected>Texto grande</option>
                                                <option value="upload">Upload</option>
                                                @elseif ($etiquetasSubTrab->tipocampoextra2 == "upload")
                                                <option value="textosimples">Texto Simples</option>
                                                <option value="textogrande">Texto grande</option>
                                                <option value="upload" selected>Upload</option>
                                                @else
                                                <option value="textosimples" selected>Texto Simples</option>
                                                <option value="textogrande">Texto grande</option>
                                                <option value="upload" selected>Upload</option>
                                                @endif
                                            </select>
                                        </div>
                                        <div class="form-group col-sm-2">
                                            <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="gridCheck" @if($etiquetasSubTrab->checkcampoextra2) checked @endif name="checkcampoextra2">
                                            <label class="form-check-label" for="gridCheck">
                                                Exibir
                                            </label>
                                            </div>
                                        </div>
                                        <a class="move-up"><img src="{{asset('img/icons/sobe.png')}}" id="antesAutor" style="width:20px; margin-left:10px"></a>
                                        <a class="move-down"><img src="{{asset('img/icons/desce.png')}}" id="depoisAutor" style="width:20px"></a>
                                    </div>
                                </div>
                            </div>
                        @endif
                        @if ($indice == "etiquetacampoextra3")
                            <div class="card" id="bisavo">
                                <div class="card-body">
                                    <div class="form-group row">
                                        <input type="hidden" name="checkcampoextra3" value="false" id="checkcampoextra3">
                                        <label for="inputEmail3" class="col-sm-auto col-form-label" id="classeh23">{{$etiquetasSubTrab->etiquetacampoextra3}}:</label>
                                        <div class="col-sm-auto">
                                        <input type="text" class="form-control" id="etiquetacampoextra3" name="etiquetacampoextra3" placeholder="Editar Etiqueta">
                                        </div>
                                        <div class="form-group col-sm-3">
                                            <select class="form-control" id="exampleFormControlSelect1" name="select_campo3">
                                                @if ($etiquetasSubTrab->tipocampoextra3 == "textosimples")
                                                <option value="textosimples" selected>Texto Simples</option>
                                                <option value="textogrande">Texto grande</option>
                                                <option value="upload">Upload</option>
                                                @elseif ($etiquetasSubTrab->tipocampoextra3 == "textogrande")
                                                <option value="textosimples">Texto Simples</option>
                                                <option value="textogrande" selected>Texto grande</option>
                                                <option value="upload">Upload</option>
                                                @elseif ($etiquetasSubTrab->tipocampoextra3 == "upload")
                                                <option value="textosimples">Texto Simples</option>
                                                <option value="textogrande">Texto grande</option>
                                                <option value="upload" selected>Upload</option>
                                                @else
                                                <option value="textosimples" selected>Texto Simples</option>
                                                <option value="textogrande">Texto grande</option>
                                                <option value="upload" selected>Upload</option>
                                                @endif
                                            </select>
                                        </div>
                                        <div class="form-group col-sm-2">
                                            <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="gridCheck" @if($etiquetasSubTrab->checkcampoextra3) checked @endif name="checkcampoextra3">
                                            <label class="form-check-label" for="gridCheck">
                                                Exibir
                                            </label>
                                            </div>
                                        </div>
                                        <a class="move-up"><img src="{{asset('img/icons/sobe.png')}}" id="antesAutor" style="width:20px; margin-left:10px"></a>
                                        <a class="move-down"><img src="{{asset('img/icons/desce.png')}}" id="depoisAutor" style="width:20px"></a>
                                    </div>
                                </div>
                            </div>
                        @endif
                        @if ($indice == "etiquetacampoextra4")
                            <div class="card" id="bisavo">
                                <div class="card-body">
                                    <div class="form-group row">
                                        <input type="hidden" name="checkcampoextra4" value="false" id="checkcampoextra4">
                                        <label for="inputEmail3" class="col-sm-auto col-form-label" id="classeh24">{{$etiquetasSubTrab->etiquetacampoextra4}}:</label>
                                        <div class="col-sm-auto">
                                        <input type="text" class="form-control" id="etiquetacampoextra4" name="etiquetacampoextra4" placeholder="Editar Etiqueta">
                                        </div>
                                        <div class="form-group col-sm-3">
                                            <select class="form-control" id="exampleFormControlSelect1" name="select_campo4">
                                                @if ($etiquetasSubTrab->tipocampoextra4 == "textosimples")
                                                <option value="textosimples" selected>Texto Simples</option>
                                                <option value="textogrande">Texto grande</option>
                                                <option value="upload">Upload</option>
                                                @elseif ($etiquetasSubTrab->tipocampoextra4 == "textogrande")
                                                <option value="textosimples">Texto Simples</option>
                                                <option value="textogrande" selected>Texto grande</option>
                                                <option value="upload">Upload</option>
                                                @elseif ($etiquetasSubTrab->tipocampoextra4 == "upload")
                                                <option value="textosimples">Texto Simples</option>
                                                <option value="textogrande">Texto grande</option>
                                                <option value="upload" selected>Upload</option>
                                                @else
                                                <option value="textosimples" selected>Texto Simples</option>
                                                <option value="textogrande">Texto grande</option>
                                                <option value="upload" selected>Upload</option>
                                                @endif
                                            </select>
                                        </div>
                                        <div class="form-group col-sm-2">
                                            <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="gridCheck" @if($etiquetasSubTrab->checkcampoextra4) checked @endif name="checkcampoextra4">
                                            <label class="form-check-label" for="gridCheck">
                                                Exibir
                                            </label>
                                            </div>
                                        </div>
                                        <a class="move-up"><img src="{{asset('img/icons/sobe.png')}}" id="antesAutor" style="width:20px; margin-left:10px"></a>
                                        <a class="move-down"><img src="{{asset('img/icons/desce.png')}}" id="depoisAutor" style="width:20px"></a>
                                    </div>
                                </div>
                            </div>
                        @endif
                        @if ($indice == "etiquetacampoextra5")
                            <div class="card" id="bisavo">
                                <div class="card-body">
                                    <div class="form-group row">
                                        <input type="hidden" name="checkcampoextra5" value="false" id="checkcampoextra5">
                                        <label for="inputEmail3" class="col-sm-auto col-form-label" id="classeh25">{{$etiquetasSubTrab->etiquetacampoextra5}}:</label>
                                        <div class="col-sm-auto">
                                        <input type="text" class="form-control" id="etiquetacampoextra5" name="etiquetacampoextra5" placeholder="Editar Etiqueta">
                                        </div>
                                        <div class="form-group col-sm-3">
                                            <select class="form-control" id="exampleFormControlSelect1" name="select_campo5">
                                                @if ($etiquetasSubTrab->tipocampoextra5 == "textosimples")
                                                <option value="textosimples" selected>Texto Simples</option>
                                                <option value="textogrande">Texto grande</option>
                                                <option value="upload">Upload</option>
                                                @elseif ($etiquetasSubTrab->tipocampoextra5 == "textogrande")
                                                <option value="textosimples">Texto Simples</option>
                                                <option value="textogrande" selected>Texto grande</option>
                                                <option value="upload">Upload</option>
                                                @elseif ($etiquetasSubTrab->tipocampoextra5 == "upload")
                                                <option value="textosimples">Texto Simples</option>
                                                <option value="textogrande">Texto grande</option>
                                                <option value="upload" selected>Upload</option>
                                                @else
                                                <option value="textosimples" selected>Texto Simples</option>
                                                <option value="textogrande">Texto grande</option>
                                                <option value="upload" selected>Upload</option>
                                                @endif
                                            </select>
                                        </div>
                                        <div class="form-group col-sm-2">
                                            <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="gridCheck" @if($etiquetasSubTrab->checkcampoextra5) checked @endif name="checkcampoextra5">
                                            <label class="form-check-label" for="gridCheck">
                                                Exibir
                                            </label>
                                            </div>
                                        </div>
                                        <a class="move-up"><img src="{{asset('img/icons/sobe.png')}}" id="antesAutor" style="width:20px; margin-left:10px"></a>
                                        <a class="move-down"><img src="{{asset('img/icons/desce.png')}}" id="depoisAutor" style="width:20px"></a>
                                    </div>
                                </div>
                            </div>
                        @endif
                    @endforeach

                    </form>
                    <div class="row justify-content-center">
                        <div class="col-md-6">
                            <form id="formSubmTrabaEtiquetasPadrao" method="POST" action="{{route('etiquetas_sub_trabalho.update', $evento->id)}}">
                                @csrf
                                <input type="hidden" name="etiquetatitulotrabalho"  value="Titulo">
                                <input type="hidden" name="etiquetaautortrabalho"   value="Autor">
                                <input type="hidden" name="etiquetacoautortrabalho" value="Co-Autor">
                                <input type="hidden" name="etiquetaresumotrabalho"  value="Resumo">
                                <input type="hidden" name="etiquetaareatrabalho"    value="Área">
                                <input type="hidden" name="etiquetauploadtrabalho"  value="Upload de Trabalho">
                                <input type="hidden" name="etiquetacampoextra1"     value="Campo Extra">
                                <input type="hidden" name="etiquetacampoextra2"     value="Campo Extra">
                                <input type="hidden" name="etiquetacampoextra3"     value="Campo Extra">
                                <input type="hidden" name="etiquetacampoextra4"     value="Campo Extra">
                                <input type="hidden" name="etiquetacampoextra5"     value="Campo Extra">
                                <input type="hidden" name="select_campo1"           value="textosimples">
                                <input type="hidden" name="select_campo2"           value="textosimples">
                                <input type="hidden" name="select_campo3"           value="textosimples">
                                <input type="hidden" name="select_campo4"           value="textosimples">
                                <input type="hidden" name="select_campo5"           value="textosimples">
                                <input type="hidden" name="checkcampoextra1"        value="false">
                                <input type="hidden" name="checkcampoextra2"        value="false">
                                <input type="hidden" name="checkcampoextra3"        value="false">
                                <input type="hidden" name="checkcampoextra4"        value="false">
                                <input type="hidden" name="checkcampoextra5"        value="false">
                                
                                <button type="submit" class="btn btn-primary" form="formSubmTrabaEtiquetasPadrao" onclick='return default_formsubmtraba()' style="width:100%">
                                    {{ __('Retornar ao Padrão') }}
                                </button>
                            </form>
                        </div>
                        <div class="col-md-6">
                            <button type="submit" class="btn btn-primary" form="formSubmTrabaEtiquetas" style="width:100%">
                                {{ __('Finalizar') }}
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>{{-- end row card --}}



    
</div>
{{-- Template 2 - edição de etiquetas --}}




<!-- Modal Revisor -->
<div class="modal fade" id="modalRevisor" tabindex="-1" role="dialog" aria-labelledby="modalRevisor" aria-hidden="true">
  <div class="modal-dialog modal-dialog-scrollable modal-xl" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalCenterTitle">Revisor</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="row justify-content-center">
          <div class="col-sm-6">
            <label for="">Nome</label>
            <h5>Nome do Revisor</h5>
          </div>
          <div class="col-sm-6">
            <label for="">E-mail</label>
            <h5>E-mail do Revisor</h5>
          </div>
        </div>
        <div class="row justify-content-center">
          <div class="col-sm-6">
            <label for="">Área</label>
            <h5>Área do Revisor</h5>
          </div>
          <div class="col-sm-6">
            <label for="">Instituição</label>
            <h5>Instituição do Revisor</h5>
          </div>
        </div>

        <div class="row justify-content-center" style="margin-top:20px">
          <div class="col-sm-12">
            <h4>Trabalhos</h4>
          </div>
        </div>
        <div class="row justify-content-center">
          <div class="col-sm-12">
            <table class="table table-hover table-responsive-lg table-sm">
                <thead>
                  <tr>
                    <th scope="col">Título</th>
                    <th scope="col">Status</th>

                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>Título do trabalho</td>
                    <td>Status do trabalho</td>

                  </tr>
                </tbody>
              </table>
          </div>
        </div>
        </div>
      <!-- <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
        <button type="button" class="btn btn-primary">Salvar</button>
      </div> -->
    </div>
  </div>
</div>

<!-- Modal Trabalho -->
<div class="modal fade" id="modalTrabalho" tabindex="-1" role="dialog" aria-labelledby="modalTrabalho" aria-hidden="true">
  <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalCenterTitle">Trabalho</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="row justify-content-center">
          <div class="col-sm-12">
            <h5>Título</h5>
            <p id="tituloTrabalhoAjax"></p>
          </div>

        </div>
        <div class="row justify-content-center">
          <div class="col-sm-12">
            <h5>Resumo</h5>
            <p id="resumoTrabalhoAjax"></p>
          </div>
        </div>

        <div class="row justify-content-center" style="margin-top:20px">
          <div class="col-sm-12">
            <h5>Remover Revisor</h5>
          </div>
        </div>
        <form action="{{ route('atribuicao.delete') }}" method="post">
          @csrf
          <input type="hidden" name="eventoId" value="{{$evento->id}}">
          <input type="hidden" name="trabalhoId" value="" id="removerRevisorTrabalhoId">
        <div class="row justify-content-center">
          <div class="col-sm-9">
              <div id="revisoresAjax" class="revisoresTrabalho" style="padding-left:20px">
                <div id="cblist">

                </div>
              </div>
          </div>
          <div class="col-sm-3">
            <button type="submit" class="btn btn-primary" id="removerRevisorTrabalho">Remover Revisor</button>
          </div>
        </div>
      </form>
        <div class="row">
          <div class="col-sm-12">
            <h5>Adicionar Revisor</h5>
          </div>
        </div>
        <form action="{{ route('distribuicaoManual') }}" method="post">
          @csrf
          <input type="hidden" name="trabalhoId" value="" id="distribuicaoManualTrabalhoId">
          <input type="hidden" name="eventoId" value="{{$evento->id}}">
          <div class="row" >
            <div class="col-sm-9">
              <div class="form-group">
                <select name="revisorId" class="form-control" id="selectRevisorTrabalho">


                </select>
              </div>
            </div>
            <div class="col-sm-3">
              <button type="submit" class="btn btn-primary" id="addRevisorTrabalho">Adicionar Revisor</button>
            </div>
        </form>
        </div>
        </div>
      <div class="modal-footer">


      </div>
    </div>
  </div>
</div>

<!-- Modal Editar Modalidade/FormTipoSubm -->

<!-- Modal -->
<div class="modal fade" id="modalEditarModalidade" tabindex="-1" role="dialog" aria-labelledby="modalEditarModalidade" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">Editar Modalidade</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <div class="row justify-content-center">
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-body">
                            <div>
                                @error('marcarextensao')
                                  @include('componentes.mensagens')
                                @enderror
                            </div>
                            <form method="POST" action="{{route('modalidade.update')}}" enctype="multipart/form-data">
                            @csrf
                            <p class="card-text">
                                <input type="hidden" name="modalidadeEditId" id="modalidadeEditId" value="">
                                <input type="hidden" name="eventoId" value="{{$evento->id}}">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <label for="nomeModalidadeEdit" class="col-form-label">*{{ __('Nome') }}</label>
                                    </div>
                                </div>
                                <div class="row justify-content-center">
                                    <div class="col-sm-12">
                                        <input id="nomeModalidadeEdit" type="text" class="form-control @error('nomeModalidadeEdit') is-invalid @enderror" name="nomeModalidadeEdit" value="" required autocomplete="nomeModalidadeEdit" autofocus>
            
                                        @error('nomeModalidadeEdit')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
            
                                </div>{{-- end row--}}
            
                            </p>
            
                            {{-- Data: inicioSubmissao | fimSubmissao --}}
                            <div class="row justify-content-center">
            
                                <div class="col-sm-6">
                                    <label for="inicioSubmissaoEdit" class="col-form-label">{{ __('Início da Submissão') }}</label>
                                    <input id="inicioSubmissaoEdit" type="date" class="form-control @error('inicioSubmissaoEdit') is-invalid @enderror" name="inicioSubmissaoEdit" value="{{ old('inicioSubmissaoEdit') }}" autocomplete="inicioSubmissaoEdit" autofocus>
            
                                    @error('inicioSubmissaoEdit')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="col-sm-6">
                                    <label for="fimSubmissaoEdit" class="col-form-label">{{ __('Fim da Submissão') }}</label>
                                    <input id="fimSubmissaoEdit" type="date" class="form-control @error('fimSubmissaoEdit') is-invalid @enderror" name="fimSubmissaoEdit" value="{{ old('fimSubmissaoEdit') }}" autocomplete="fimSubmissaoEdit" autofocus>
            
                                    @error('fimSubmissaoEdit')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            {{-- end Data: inicioSubmissao | fimSubmissao --}}
            
                            {{-- Data: inicioRevisao | fimRevisao --}}
                            <div class="row justify-content-center">
            
                                <div class="col-sm-6">
                                    <label for="inicioRevisaoEdit" class="col-form-label">{{ __('Início da Revisão') }}</label>
                                    <input id="inicioRevisaoEdit" type="date" class="form-control @error('inicioRevisaoEdit') is-invalid @enderror" name="inicioRevisaoEdit" value="{{ old('inicioRevisaoEdit') }}" autocomplete="inicioRevisaoEdit" autofocus>
            
                                    @error('inicioRevisaoEdit')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="col-sm-6">
                                    <label for="fimRevisaoEdit" class="col-form-label">{{ __('Fim da Revisão') }}</label>
                                    <input id="fimRevisaoEdit" type="date" class="form-control @error('fimRevisaoEdit') is-invalid @enderror" name="fimRevisaoEdit" value="{{ old('fimRevisaoEdit') }}" autocomplete="fimRevisaoEdit" autofocus>
            
                                    @error('fimRevisaoEdit')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            {{-- end Data: inicioRevisão | fimRevisao --}}
            
                            {{-- Data: resultado --}}
                            <div class="row">
            
                                <div class="col-sm-6">
                                    <label for="inicioResultadoEdit" class="col-form-label">{{ __('Início do Resultado') }}</label>
                                    <input id="inicioResultadoEdit" type="date" class="form-control @error('inicioResultadoEdit') is-invalid @enderror" name="inicioResultadoEdit" value="{{ old('inicioResultadoEdit') }}" autocomplete="inicioResultadoEdit" autofocus>
            
                                    @error('inicioResultadoEdit')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            {{-- end Data: resultado --}}
            
                            {{-- Inicio - Tipo de submissão --}}
                            <div class="row">
            
                                <div class="col-sm-6">
                                    <label class="col-form-label">*{{ __('Restrições de resumo:') }}</label>
            
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="limitEdit" id="id-limit-custom_field-accountEdit-1-1" value="limit-option1Edit">
                                        <label class="form-check-label" for="texto">
                                            Quantidade de caracteres 
                                        </label>
                                        </div>
                                        <div class="form-check">
                                        <input class="form-check-input" type="radio" name="limitEdit" id="id-limit-custom_field-accountEdit-1-2" value="limit-option2Edit">
                                        <label class="form-check-label" for="arquivo">
                                            Quantidade de palavras 
                                        </label>
                                    </div>
            
                                    <div class="row">
                                        <div class="col-sm-6" id="min-max-caracteresEdit" style="display: none">
                                            <div class="form-group">
                                                <label class="col-form-label">{{ __('MínimoC') }}</label>
                                                <div>
                                                  <input class="form-control" type="number" id="mincaracteresEdit" name="mincaracteresEdit">
                                                </div>
                                            </div>
                
                                            <div class="form-group">
                                                <label class="col-form-label">{{ __('MáximoC') }}</label>
                                                <div>
                                                  <input class="form-control" type="number" id="maxcaracteresEdit" name="maxcaracteresEdit">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
            
                                    <div class="row">
                                        <div class="col-sm-6" id="min-max-palavrasEdit" style="display: none">
                                            <div class="form-group">
                                                <label class="col-form-label">{{ __('MínimoP') }}</label>
                                                <div>
                                                  <input class="form-control" type="number" id="minpalavrasEdit" name="minpalavrasEdit">
                                                </div>
                                            </div>
                
                                            <div class="form-group">
                                                <label class="col-form-label">{{ __('MáximoP') }}</label>
                                                <div>
                                                  <input class="form-control" type="number" id="maxpalavrasEdit" name="maxpalavrasEdit">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-check" style="margin-top: 10px">
                                        <input class="form-check-input incluirarquivoEdit" type="checkbox" name="arquivoEdit" id="id-custom_field-accountEdit-1-2">
                                        <label class="form-check-label" for="arquivoEdit">
                                            Incluir submissão por arquivo 
                                        </label>
                                        @error('arquivoEdit')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
            
                            <div class="row">
                                <div class="col-sm-6" id="tipo-arquivoEdit" style="display: none">
            
                                    <div class="titulo-detalhes" style="margin-top: 10px"></div>
                                    <label class="col-form-label">{{ __('Tipos de extensão aceitas') }}</label>
            
                                    <div class="form-check" style="margin-top: 10px">
                                        <input class="form-check-input" type="checkbox" id="pdfEdit" name="pdfEdit">
                                        <label class="form-check-label" for="pdfEdit">
                                            .pdf
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="jpgEdit" name="jpgEdit">
                                        <label class="form-check-label" for="jpgEdit">
                                            .jpg
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="jpegEdit" name="jpegEdit">
                                        <label class="form-check-label" for="jpegEdit">
                                            .jpeg
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="pngEdit" name="pngEdit">
                                        <label class="form-check-label" for="pngEdit">
                                            .png
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="docxEdit" name="docxEdit">
                                        <label class="form-check-label" for="docxEdit">
                                            .docx
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="odtEdit" name="odtEdit">
                                        <label class="form-check-label" for="odtEdit">
                                            .odt
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="row justify-content-center">
                                {{-- Arquivo de Regras  --}}
                                <div class="col-sm-12" style="margin-top: 20px;">
                                  <label for="arquivoRegras" class="col-form-label">{{ __('Enviar regras:') }}</label>
            
                                  <div class="custom-file">
                                    <input type="file" class="filestyle" data-placeholder="Nenhum arquivo" data-text="Selecionar" data-btnClass="btn-primary-lmts" name="arquivoRegrasEdit">
                                  </div>
                                  <small>O arquivo Selecionado deve ser no formato PDF de até 2mb.</small>
                                  @error('arquivoRegras')
                                  <span class="invalid-feedback" role="alert" style="overflow: visible; display:block">
                                    <strong>{{ $message }}</strong>
                                  </span>
                                  @enderror
                                </div>
                                {{-- Arquivo de Templates --}}
                                <div class="col-sm-12" id="area-templateEdit" style="margin-top: 20px; display:none">
                                    <label for="nomeTrabalho" class="col-form-label">{{ __('Enviar template:') }}</label>
            
                                    <div class="custom-file">
                                      <input type="file" class="filestyle" data-placeholder="Nenhum arquivo" data-text="Selecionar" data-btnClass="btn-primary-lmts" name="arquivoTemplatesEdit">
                                    </div>
                                    <small>O arquivo Selecionado deve ser no formato PDF de até 2mb.</small>
                                    @error('arquivoTemplates')
                                    <span class="invalid-feedback" role="alert" style="overflow: visible; display:block">
                                      <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <br>
                            <div class="row justify-content-center">
                                <div class="col-md-12">
                                    <button type="submit" class="btn btn-primary" style="width:100%">
                                        {{ __('Finalizar') }}
                                    </button>
                                </div>
                            </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>{{-- end row card --}}
            
            
            </div>
        </div>
        {{-- <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Save changes</button>
        </div> --}}
      </div>
    </div>
</div>
{{-- Fim Modal --}}

{{-- Modal para edição de critérios --}}
<div class="modal fade" tabindex="-1" id="modalEditarCriterio" aria-labelledby="modalEditarCriterio" role="dialog">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Editar Critério</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <form id="formCriterioUpdate" method="POST" action="{{route('atualizar.criterio')}}">
                @csrf
                <input type="hidden" name="eventoId" value="{{$evento->id}}">
                <input type="hidden" name="modalidadeId" id="modalidadeIdCriterioUpdate" value="">
                <div class="form-group">
                  <label for="exampleInputEmail1">Nome</label>
                  <input type="text" class="form-control" name="nomeCriterioUpdate" id="nomeCriterioUpdate" value="">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Peso</label>
                  <input type="number" class="form-control" name="pesoCriterioUpdate" id="pesoCriterioUpdate" value="">
                </div>
            </form>
        </div>
        <div class="modal-footer">
            <button type="submit" class="btn btn-primary" form="formCriterioUpdate">Atualizar</button>
        </div>
      </div>
    </div>
</div>
{{-- Fim Modal --}}


<!-- Modal Trabalho -->
<div class="modal fade" id="modalDistribuicaoAutomatica" tabindex="-1" role="dialog" aria-labelledby="modalDistribuicaoAutomatica" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalCenterTitle">Trabalho</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form method="GET" action="{{ route('distribuicaoAutomaticaPorArea') }}" id="formDistribuicaoPorArea">
        <div class="modal-body">
          <input type="hidden" name="eventoId" value="{{$evento->id}}">
          <div class="row">
            <div class="col-sm-12">
                <label for="areaId" class="col-form-label">{{ __('Área') }}</label>
                <select class="form-control @error('areaId') is-invalid @enderror" id="areaIdformDistribuicaoPorArea" name="areaId">
                    <option value="" disabled selected hidden> Área </option>
                    @foreach($areas as $area)
                        <option value="{{$area->id}}">{{$area->nome}}</option>
                    @endforeach
                </select>

                @error('areaId')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
          </div>
          <div class="row">
              <div class="col-sm-12">
                  <label for="numeroDeRevisoresPorTrabalho" class="col-form-label">{{ __('Número de revisores por trabalho') }}</label>
              </div>
          </div>
          <div class="row justify-content-center">
              <div class="col-sm-12">
                  <input id="numeroDeRevisoresPorTrabalhoInput" type="number" min="1" class="form-control @error('numeroDeRevisoresPorTrabalho') is-invalid @enderror" name="numeroDeRevisoresPorTrabalho" value="{{ old('numeroDeRevisoresPorTrabalho') }}" required autocomplete="numeroDeRevisoresPorTrabalho" autofocus>

                  @error('numeroDeRevisoresPorTrabalho')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
                  @enderror
              </div>

          </div>{{-- end row--}}
        </div>
      </form>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
        <button id="numeroDeRevisoresPorTrabalhoButton" disabled onclick="document.getElementById('formDistribuicaoPorArea').submit();" type="button" class="btn btn-primary">Distribuir</button>
      </div>
    </div>
  </div>
</div>




</div>
<input type="hidden" name="trabalhoIdAjax" value="1" id="trabalhoIdAjax">
<input type="hidden" name="modalidadeIdAjax" value="1" id="modalidadeIdAjax">
<input type="hidden" name="criterioIdAjax" value="1" id="criterioIdAjax">

@endsection
@section('javascript')
  <script type="text/javascript" >
    
    // Adicionar novo criterio
    $(function(){
        $('#addCriterio').click(function(){
            linha = montarLinhaInput();
            $('#criterios').append(linha);
        });
    });

    // Remover Criterio
    $(document).on('click','.delete',function(){
        $(this).closest('.row').remove();
            return false;
    });

    // Montar div para novo criterio 
    function montarLinhaInput(){
        return  "<div class="+"row"+">"+
                    "<div class="+"col-sm-6"+">"+
                        "<label>Nome</label>"+
                        "<input"+" type="+'text'+" style="+"margin-bottom:10px"+" class="+'form-control'+" name="+'nomeCriterio[]'+" placeholder="+"Nome"+" required>"+
                    "</div>"+
                    "<div class="+"col-sm-5"+">"+
                        "<label>Peso</label>"+
                        "<input"+" type="+'number'+" style="+"margin-bottom:10px"+" class="+'form-control'+" name="+'pesoCriterio[]'+" placeholder="+"Peso"+" required>"+
                    "</div>"+
                    "<div class="+"col-sm-1"+">"+
                        "<a href="+"#"+" class="+"delete"+">"+
                        "<img src="+"/img/icons/lixo.png"+" style="+"width:25px;margin-top:35px"+">"+
                        "</a>"+
                    "</div>"+
                "</div>";
    }

    // Função para retornar campos de edição de etiquetas para submissão de trabalhos ao default.
    function default_formsubmtraba(){
        return confirm('Tem certeza que deseja voltar a ordem e valores padrões dos campos?'); 
    }

    // Função para retornar campos de edição card de evento ao default.
    function default_edicaoCardEvento(){
        return confirm('Tem certeza que deseja restaurar os valores padrões dos campos?'); 
    }

    // Exibir campo ao mesmo tempo que é escrito
    $(document).ready(function() {

        // Tela de evento
        $('#etiquetanomeevento').on('keyup', function() {
            if($(this).val().length == 0){
                $('#classeh4').html("{{$etiquetas->etiquetanomeevento}}:");    
            }else {
                $('#classeh4').html($(this).val()+":");
            }
        });

        $('#etiquetadescricaoevento').on('keyup', function() {
            if($(this).val().length == 0){
                $('#classeh5').html("{{$etiquetas->etiquetadescricaoevento}}:");    
            }else {
                $('#classeh5').html($(this).val()+":");
            }
        });

        $('#etiquetatipoevento').on('keyup', function() {
            if($(this).val().length == 0){
                $('#classeh6').html("{{$etiquetas->etiquetatipoevento}}:");    
            }else {
                $('#classeh6').html($(this).val()+":");
            }
        });

        $('#etiquetadatas').on('keyup', function() {
            if($(this).val().length == 0){
                $('#classeh7').html("{{$etiquetas->etiquetadatas}}:");    
            }else {
                $('#classeh7').html($(this).val()+":");
            }
        });

        $('#etiquetasubmissoes').on('keyup', function() {
            if($(this).val().length == 0){
                $('#classeh8').html("{{$etiquetas->etiquetasubmissoes}}:");    
            }else {
                $('#classeh8').html($(this).val()+":");
            }
        });

        $('#etiquetabaixarregra').on('keyup', function() {
            if($(this).val().length == 0){
                $('#classeh9').html("{{$etiquetas->etiquetabaixarregra}}:");    
            }else {
                $('#classeh9').html($(this).val()+":");
            }
        });

        $('#etiquetabaixartemplate').on('keyup', function() {
            if($(this).val().length == 0){
                $('#classeh10').html("{{$etiquetas->etiquetabaixartemplate}}:");    
            }else {
                $('#classeh10').html($(this).val()+":");
            }
        });

        $('#etiquetaenderecoevento').on('keyup', function() {
            if($(this).val().length == 0){
                $('#classeh11').html("{{$etiquetas->etiquetaenderecoevento}}:");    
            }else {
                $('#classeh11').html($(this).val()+":");
            }
        });

        $('#etiquetamoduloinscricao').on('keyup', function() {
            if($(this).val().length == 0){
                $('#classeh12').html("{{$etiquetas->etiquetamoduloinscricao}}:");    
            }else {
                $('#classeh12').html($(this).val()+":");
            }
        });

        $('#etiquetamoduloprogramacao').on('keyup', function() {
            if($(this).val().length == 0){
                $('#classeh13').html("{{$etiquetas->etiquetamoduloprogramacao}}:");    
            }else {
                $('#classeh13').html($(this).val()+":");
            }
        });

        $('#etiquetamoduloorganizacao').on('keyup', function() {
            if($(this).val().length == 0){
                $('#classeh14').html("{{$etiquetas->etiquetamoduloorganizacao}}:");    
            }else {
                $('#classeh14').html($(this).val()+":");
            }
        });


        // Tela de submissão de trabalho
        $('#etiquetatitulotrabalho').on('keyup', function() {
            if($(this).val().length == 0){
                $('#classeh15').html("{{$etiquetasSubTrab->etiquetatitulotrabalho}}:");    
            }else {
                $('#classeh15').html($(this).val()+":");
            }
        });
        
        $('#etiquetaautortrabalho').on('keyup', function() {
            if($(this).val().length == 0){
                $('#classeh16').html("{{$etiquetasSubTrab->etiquetaautortrabalho}}:");    
            }else {
                $('#classeh16').html($(this).val()+":");
            }
        });

        $('#etiquetacoautortrabalho').on('keyup', function() {
            if($(this).val().length == 0){
                $('#classeh17').html("{{$etiquetasSubTrab->etiquetacoautortrabalho}}:");    
            }else {
                $('#classeh17').html($(this).val()+":");
            }
        });

        $('#etiquetaresumotrabalho').on('keyup', function() {
            if($(this).val().length == 0){
                $('#classeh18').html("{{$etiquetasSubTrab->etiquetaresumotrabalho}}:");    
            }else {
                $('#classeh18').html($(this).val()+":");
            }
        });

        $('#etiquetaareatrabalho').on('keyup', function() {
            if($(this).val().length == 0){
                $('#classeh19').html("{{$etiquetasSubTrab->etiquetaareatrabalho}}:");    
            }else {
                $('#classeh19').html($(this).val()+":");
            }
        });

        $('#etiquetauploadtrabalho').on('keyup', function() {
            if($(this).val().length == 0){
                $('#classeh20').html("{{$etiquetasSubTrab->etiquetauploadtrabalho}}:");    
            }else {
                $('#classeh20').html($(this).val()+":");
            }
        });

        $('#etiquetacampoextra1').on('keyup', function() {
            if($(this).val().length == 0){
                $('#classeh21').html("{{$etiquetasSubTrab->etiquetacampoextra1}}:");    
            }else {
                $('#classeh21').html($(this).val()+":");
            }
        });

        $('#etiquetacampoextra2').on('keyup', function() {
            if($(this).val().length == 0){
                $('#classeh22').html("{{$etiquetasSubTrab->etiquetacampoextra2}}:");    
            }else {
                $('#classeh22').html($(this).val()+":");
            }
        });

        $('#etiquetacampoextra3').on('keyup', function() {
            if($(this).val().length == 0){
                $('#classeh23').html("{{$etiquetasSubTrab->etiquetacampoextra3}}:");    
            }else {
                $('#classeh23').html($(this).val()+":");
            }
        });

        $('#etiquetacampoextra4').on('keyup', function() {
            if($(this).val().length == 0){
                $('#classeh24').html("{{$etiquetasSubTrab->etiquetacampoextra4}}:");    
            }else {
                $('#classeh24').html($(this).val()+":");
            }
        });

        $('#etiquetacampoextra5').on('keyup', function() {
            if($(this).val().length == 0){
                $('#classeh25').html("{{$etiquetasSubTrab->etiquetacampoextra5}}:");    
            }else {
                $('#classeh25').html($(this).val()+":");
            }
        });
    });
    
    // Ordenar campos de submissão de trabalhos
    $(document).ready(function(){
        $('.move-down').click(function(){
            if (($(this).next()) && ($(this).parents("#bisavo").next().attr('id') == "bisavo")) {
                console.log("IF MOVE-DOWN");
                var t = $(this);
                t.parents("#bisavo").animate({top: '20px'}, 500, function(){
                    t.parents("#bisavo").next().animate({top: '-20px'}, 500, function(){
                        t.parents("#bisavo").css('top', '0px');
                        t.parents("#bisavo").next().css('top', '0px');
                        t.parents("#bisavo").insertAfter(t.parents("#bisavo").next());
                    });
                });
                // $(this).parents("#bisavo").insertAfter($(this).parents("#bisavo").next());
            }
            else {
                console.log("ELSE MOVE-DOWN");
            }
        });
        $('.move-up').click(function(){
            if (($(this).prev()) && ($(this).parents("#bisavo").prev().attr('id') == "bisavo")) {
                console.log("IF MOVE-UP");
                var t = $(this);
                t.parents("#bisavo").animate({top: '-20px'}, 500, function(){
                    t.parents("#bisavo").prev().animate({top: '20px'}, 500, function(){
                        t.parents("#bisavo").css('top', '0px');
                        t.parents("#bisavo").prev().css('top', '0px');
                        t.parents("#bisavo").insertBefore(t.parents("#bisavo").prev());
                    });
                });
                // $(this).parents("#bisavo").insertBefore($(this).parents("#bisavo").prev());
            }
            else {
                console.log("ELSE MOVE-UP");
            }
        });
    });

    // Exibir ou ocultar opções de Texto na criação de modalidade - com checkbox
    $(document).ready(function() {
        $('input:checkbox[class="form-check-input incluirarquivo"]').on("change", function() {
            if (this.checked) {
                $("#area-template").show();
                $("#tipo-arquivo").show();
            } else {
                $("#area-template").hide();
                $("#tipo-arquivo").hide();
            }
        });
    });

    $(document).ready(function() {
        $('input:checkbox[class="form-check-input incluirarquivoEdit"]').on("change", function() {
            if (this.checked) {
                $("#area-templateEdit").show();
                $("#tipo-arquivoEdit").show();
            } else {
                $("#area-templateEdit").hide();
                $("#tipo-arquivoEdit").hide();
            }
        });
    });

    // Exibir ou ocultar opções de texto ou arquivo, em cadastro de modalidade
    // $(document).ready(function() {
    //     $('input:radio[name="custom_field"]').on("change", function() {
    //         if (this.checked && this.value == 'option1') {
    //             $("#limite-caracteres").show();
    //             $("#tipo-arquivo").hide();
    //             $("#area-template").hide();
    //         } else {
    //             $("#tipo-arquivo").show();
    //             $("#limite-caracteres").hide();
    //             $("#area-template").show();
    //         }
    //     });
    // });

    // Exibir ou ocultar opções de texto ou arquivo, em edição de modalidade
    // $(document).ready(function() {
    //     $('input:radio[name="custom_fieldEdit"]').on("change", function() {
    //         if (this.checked && this.value == 'option1Edit') {
    //             $("#limite-caracteresEdit").show();
    //             $("#tipo-arquivoEdit").hide();
    //             $("#area-templateEdit").hide();
    //         } else {
    //             $("#tipo-arquivoEdit").show();
    //             $("#limite-caracteresEdit").hide();
    //             $("#area-templateEdit").show();
    //         }
    //     });
    // });

    $(document).ready(function() {
        $('input:radio[name="limit"]').on("change", function() {
            if (this.checked && this.value == 'limit-option1') {
                $("#min-max-caracteres").show();
                $("#min-max-palavras").hide();
            } else {
                $("#min-max-palavras").show();
                $("#min-max-caracteres").hide();
            }
        });
    });

    $(document).ready(function() {
        $('input:radio[name="limitEdit"]').on("change", function() {
            if (this.checked && this.value == 'limit-option1Edit') {
                $("#min-max-caracteresEdit").show();
                $("#min-max-palavrasEdit").hide();
            } else {
                $("#min-max-palavrasEdit").show();
                $("#min-max-caracteresEdit").hide();
            }
        });
    });

    // Exibir ou ocultar campos de edição de etiquetas de eventos
    $(document).ready(function() {
        $('#botao-editar-nome').on("click", function() {
            $("#etiqueta-nome-evento").toggle(500);
        });
    });

    $(document).ready(function() {
        $('#botao-editar-descricao').on("click", function() {
            $("#etiqueta-descricao-evento").toggle(500);
        });
    });

    $(document).ready(function() {
        $('#botao-editar-tipo').on("click", function() {
            $("#etiqueta-tipo-evento").toggle(500);
        });
    });

    $(document).ready(function() {
        $('#botao-editar-datas').on("click", function() {
            $("#etiqueta-data-evento").toggle(500);
        });
    });

    $(document).ready(function() {
        $('#botao-editar-submissoes').on("click", function() {
            $("#etiqueta-submissoes-evento").toggle(500);
        });
    });

    $(document).ready(function() {
        $('#botao-editar-endereco').on("click", function() {
            $("#etiqueta-endereco-evento").toggle(500);
        });
    });

    $(document).ready(function() {
        $('#botao-editar-modulo-inscricao').on("click", function() {
            $("#etiqueta-modulo-inscricao-evento").toggle(500);
        });
    });

    $(document).ready(function() {
        $('#botao-editar-modulo-programacao').on("click", function() {
            $("#etiqueta-modulo-programacao-evento").toggle(500);
        });
    });

    $(document).ready(function() {
        $('#botao-editar-modulo-organizacao').on("click", function() {
            $("#etiqueta-modulo-organizacao-evento").toggle(500);
        });
    });

    $(document).ready(function() {
        $('#botao-editar-etiqueta-regra').on("click", function() {
            $("#etiqueta-baixar-regra-evento").toggle(500);
        });
    });

    $(document).ready(function() {
        $('#botao-editar-etiqueta-template').on("click", function() {
            $("#etiqueta-baixar-template-evento").toggle(500);
        });
    });
    // Fim

    // Exibir ou ocultar campos de edição de etiquetas de trabalhos
    $(document).ready(function() {
        $('#botao-editar-titulo').on("click", function() {
            $("#etiqueta-titulo-trabalho").toggle(500);
        });
    });

    $(document).ready(function() {
        $('#botao-editar-autor').on("click", function() {
            $("#etiqueta-autor-trabalho").toggle(500);
        });
    });

    $(document).ready(function() {
        $('#botao-editar-coautor').on("click", function() {
            $("#etiqueta-coautor-trabalho").toggle(500);
        });
    });

    $(document).ready(function() {
        $('#botao-editar-resumo').on("click", function() {
            $("#etiqueta-resumo-trabalho").toggle(500);
        });
    });

    $(document).ready(function() {
        $('#botao-editar-area').on("click", function() {
            $("#etiqueta-area-trabalho").toggle(500);
        });
    });

    $(document).ready(function() {
        $('#botao-editar-upload').on("click", function() {
            $("#etiqueta-upload-trabalho").toggle(500);
        });
    });

    $(document).ready(function() {
        $('#botao-editar-regras').on("click", function() {
            $("#etiqueta-regras-trabalho").toggle(500);
        });
    });

    $(document).ready(function() {
        $('#botao-editar-templates').on("click", function() {
            $("#etiqueta-templates-trabalho").toggle(500);
        });
    });
    // Fim

  function habilitarEvento() {
    var form = document.getElementById("habilitarEventoForm");
    form.submit();
  }

  function desabilitarEvento() {
    var form = document.getElementById("desabilitarEventoForm");
    form.submit();
  }

  function trabalhoId(x){
    document.getElementById('trabalhoIdAjax').value = x;
  }

  function modalidadeId(x){
    document.getElementById('modalidadeIdAjax').value = x;
  }

  function criterioId(x){
    document.getElementById('criterioIdAjax').value = x;
  }

  $(function(){
    $('#areas').click(function(){
        $('#dropdownAreas').slideToggle(200);
    });
    $('#revisores').click(function(){
            $('#dropdownRevisores').slideToggle(200);
    });
    $('#comissao').click(function(){
            $('#dropdownComissao').slideToggle(200);
    });
    $('#modalidades').click(function(){
            $('#dropdownModalidades').slideToggle(200);
    });
    $('#eventos').click(function(){
            $('#dropdownEvento').slideToggle(200);
    });
    $('#trabalhos').click(function(){
            $('#dropdownTrabalhos').slideToggle(200);
    });
    $('#publicar').click(function(){
            $('#dropdownPublicar').slideToggle(200);
    });
    $('.botaoAjax').click(function(e){
       e.preventDefault();
       $.ajaxSetup({
          headers: {
              // 'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
              'Content-Type': 'application/json',
              'X-Requested-With': 'XMLHttpRequest'
          }
      });
       jQuery.ajax({
          url: "{{ route('detalhesTrabalho') }}",
          method: 'get',
          data: {
             // name: jQuery('#name').val(),
             // type: jQuery('#type').val(),
             // price: jQuery('#price').val()
             trabalhoId: $('#trabalhoIdAjax').val()
          },
          success: function(result){
            console.log(result);
            // result = JSON.parse(result[0]);
            // console.log(result.titulo);
            $('#tituloTrabalhoAjax').html(result.titulo);
            $('#resumoTrabalhoAjax').html(result.resumo);
            $('#distribuicaoManualTrabalhoId').val($('#trabalhoIdAjax').val());
            $('#removerRevisorTrabalhoId').val($('#trabalhoIdAjax').val());
            // console.log(result.revisores);
            var container = $('#cblist');
            container.empty();
            result.revisores.forEach(addCheckbox);
            var container = $('#selectRevisorTrabalho');
            container.empty();
            addDisabledOptionToSelect();
            result.revisoresDisponiveis.forEach(addOptionToSelect);

          }});
          jQuery.ajax({
          url: "{{ route('findModalidade') }}",
          method: 'get',
          data: {
             modalidadeId: $('#modalidadeIdAjax').val()
          },
          success: function(result){
            console.log(result);
            // document.getElementById('nomeModalidadeEdit').value = result.nome;
            $('#modalidadeEditId').val(result.id);
            $('#nomeModalidadeEdit').val(result.nome);
            $('#inicioSubmissaoEdit').val(result.inicioSubmissao);
            $('#fimSubmissaoEdit').val(result.fimSubmissao);
            $('#inicioRevisaoEdit').val(result.inicioRevisao);
            $('#fimRevisaoEdit').val(result.fimRevisao);
            $('#inicioResultadoEdit').val(result.inicioResultado);
            

            if(result.caracteres == true){
                $('#id-limit-custom_field-accountEdit-1-1').prop('checked', true);
                $("#min-max-caracteresEdit").show();
                $("#min-max-palavrasEdit").hide();
            }   
            if(result.palavras == true){
                $('#id-limit-custom_field-accountEdit-1-2').prop('checked', true);
                $("#min-max-caracteresEdit").hide();
                $("#min-max-palavrasEdit").show();
            }            
            $('#maxcaracteresEdit').val(result.maxcaracteres);
            $('#mincaracteresEdit').val(result.mincaracteres);
            $('#maxpalavrasEdit').val(result.maxpalavras);
            $('#minpalavrasEdit').val(result.minpalavras);


            if(result.arquivo == true){

                $('#id-custom_field-accountEdit-1-2').prop('checked', true);
                $("#area-templateEdit").show();
                $("#tipo-arquivoEdit").show();
            }

            if(result.pdf == true){

                $('#pdfEdit').prop('checked', true);
            }
            if(result.jpg == true){

                $('#jpgEdit').prop('checked', true);
            }
            if(result.jpeg == true){

                $('#jpegEdit').prop('checked', true);
            }
            if(result.png == true){

                $('#pngEdit').prop('checked', true);
            }
            if(result.docx == true){

                $('#docxEdit').prop('checked', true);
            }
            if(result.odt == true){

                $('#odtEdit').prop('checked', true);
            }
          }});

          jQuery.ajax({
          url: "{{ route('encontrar.criterio') }}",
          method: 'get',
          data: {
             criterioId: $('#criterioIdAjax').val()
          },
          success: function(result){
            console.log(result);
            $('#nomeCriterioUpdate').val(result.nome);
            $('#pesoCriterioUpdate').val(result.peso);
            $('#modalidadeIdCriterioUpdate').val(result.id);
          }});
       });

    $('#areaIdformDistribuicaoPorArea').change(function () {
      $.ajaxSetup({
         headers: {
             // 'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
             'Content-Type': 'application/json',
             'X-Requested-With': 'XMLHttpRequest'
         }
      });
      jQuery.ajax({
         url: "{{ route('numeroDeRevisoresAjax') }}",
         method: 'get',
         data: {
            // name: jQuery('#name').val(),
            // type: jQuery('#type').val(),
            // price: jQuery('#price').val()
            areaId: $('#areaIdformDistribuicaoPorArea').val()
         },
         success: function(result){
           if(result == 0){
             $('#numeroDeRevisoresPorTrabalhoButton').prop('disabled', true);
             alert("Não existem revisores nessa área.");
           }
           else{
             if($('#numeroDeRevisoresPorTrabalhoInput').val() < 1){
               $('#numeroDeRevisoresPorTrabalhoButton').prop('disabled', true);
             }
             else{
               $('#numeroDeRevisoresPorTrabalhoButton').prop('disabled', false);
             }
           }
           // $('#tituloTrabalhoAjax').html(result.titulo);
           // $('#resumoTrabalhoAjax').html(result.resumo);
           // $("h1, h2, p").toggleClass("blue");
         }});
    });
    $('#numeroDeRevisoresPorTrabalhoInput').on("input", function (){
      if($('#numeroDeRevisoresPorTrabalhoInput').val() < 1){
        $('#numeroDeRevisoresPorTrabalhoButton').prop('disabled', true);
      }
      else{
        $('#numeroDeRevisoresPorTrabalhoButton').prop('disabled', false);
      }
    });
  });




    function myFunction(item, index) {
      // document.getElementById("demo").innerHTML += index + ":" + item + "<br>";
      console.log(index);
      console.log(item.id);
    }

    function addCheckbox(item) {
       var container = $('#cblist');
       var inputs = container.find('input');
       var id = inputs.length+1;

       var linha = "<div class="+"row"+">"+
                    "<div class="+"col-sm-12"+">"+
                    "<input type="+"checkbox"+" id="+"cb"+id+" name="+"revisores[]"+" value="+item.id+">"+
                    "<label for="+"cb"+id+" style="+"margin-left:10px"+">"+item.nomeOuEmail+"</label>"+
                    "</div>"+
                    "</div>";
       $('#cblist').append(linha);
    }
    function addOptionToSelect(item) {
       var container = $('#selectRevisorTrabalho');
       var inputs = container.find('option');
       var id = inputs.length+1;

       var linha = "<option value="+item.id+">"+item.nomeOuEmail+"</option>";
       $('#selectRevisorTrabalho').append(linha);
    }
    function addDisabledOptionToSelect() {
       var container = $('#selectRevisorTrabalho');
       var inputs = container.find('option');

       var linha = "<option value='' disabled selected hidden> Novo Revisor </option>";
       $('#selectRevisorTrabalho').append(linha);
    }

    function cadastrarCoodComissao(){

            document.getElementById("formCoordComissao").submit();
    }

    // var newOptions = {
    //                   "Option 1": "value1",
    //                   "Option 2": "value2",
    //                   "Option 3": "value3"
    //                  };
    // var $el = $("#testeId");
    // // $("#areaRevisorTrabalhos").change(function(){
    // //   alert("The text has been changed.");
    // //   $el.empty(); // remove old options
    // //   $.each(newOptions, function(key,value) {
    // //     $el.append($("<option></option>")
    // //     .attr("value", value).text(key));
    // //   });
    // // });
    // $("#testeId").change(function(){
    //   alert("The text has been changed.");
    // });

    function habilitarPagina(id){
        informacoes = document.getElementById('divInformacoes');

        listarTrabalhos = document.getElementById('divListarTrabalhos');
        submissoesTrabalhos = document.getElementById('divDefinirSubmissoes');

        classificacao = document.getElementById('divClassificacao');
        atividades = document.getElementById('divAtividades');
        cadastrarAreas = document.getElementById('divCadastrarAreas');
        listarAreas = document.getElementById('divListarAreas');
        cadastrarRevisores = document.getElementById('divCadastrarRevisores');
        listarRevisores = document.getElementById('divListarRevisores');

        cadastrarComissao = document.getElementById('divCadastrarComissao');
        definirCoordComissao = document.getElementById('divDefinirCoordComissao');
        listarComissao = document.getElementById('divListarComissao');

        cadastrarModalidade = document.getElementById('divCadastrarModalidades');
        listarModalidade = document.getElementById('divListarModalidades');

        editarEtiqueta = document.getElementById('divEditarEtiquetas'); //Etiquetas do card de eventos
        editarEtiquetaSubTrabalhos = document.getElementById('divEditarEtiquetasSubTrabalho');

        cadastrarCriterio = document.getElementById('divCadastrarCriterio');
        listarCriterios = document.getElementById('divListarCriterio');

        // habilita divInformacoes
        if(id == 'informacoes'){
            console.log('informacoes');
            informacoes.style.display = "block";
            listarTrabalhos.style.display = "none";
            submissoesTrabalhos.style.display = "none";
            classificacao.style.display = "none";
            atividades.style.display = "none";
            cadastrarAreas.style.display = "none";
            listarAreas.style.display = "none";
            cadastrarRevisores.style.display = "none";
            listarRevisores.style.display = "none";
            cadastrarComissao.style.display = "none";
            definirCoordComissao.style.display = "none";
            listarComissao.style.display = "none";
            cadastrarModalidade.style.display = "none";
            listarModalidade.style.display = "none";
            editarEtiqueta.style.display = "none";
            editarEtiquetaSubTrabalhos.style.display = "none";
            cadastrarCriterio.style.display = "none";
            listarCriterios.style.display = "none";
        }
        if(id == 'listarTrabalhos'){
            console.log('listarTrabalhos');
            informacoes.style.display = "none";
            listarTrabalhos.style.display = "block";
            submissoesTrabalhos.style.display = "none";
            classificacao.style.display = "none";
            atividades.style.display = "none";
            cadastrarAreas.style.display = "none";
            listarAreas.style.display = "none";
            cadastrarRevisores.style.display = "none";
            listarRevisores.style.display = "none";
            cadastrarComissao.style.display = "none";
            definirCoordComissao.style.display = "none";
            listarComissao.style.display = "none";
            cadastrarModalidade.style.display = "none";
            listarModalidade.style.display = "none";
            editarEtiqueta.style.display = "none";
            editarEtiquetaSubTrabalhos.style.display = "none";
            cadastrarCriterio.style.display = "none";
            listarCriterios.style.display = "none";
        }

        if(id == 'modalidades'){
            console.log('modalidades');
            informacoes.style.display = "none";
            listarTrabalhos.style.display = "none";
            submissoesTrabalhos.style.display = "none";
            classificacao.style.display = "none";
            atividades.style.display = "none";
            cadastrarAreas.style.display = "none";
            listarAreas.style.display = "none";
            cadastrarRevisores.style.display = "none";
            listarRevisores.style.display = "none";
            cadastrarComissao.style.display = "none";
            definirCoordComissao.style.display = "none";
            listarComissao.style.display = "none";
            cadastrarModalidade.style.display = "none";
            listarModalidade.style.display = "none";
            editarEtiqueta.style.display = "none";
            editarEtiquetaSubTrabalhos.style.display = "none";
            cadastrarCriterio.style.display = "none";
            listarCriterios.style.display = "none";

        }
        if(id == 'colocacao'){
            console.log('colocacao');
            informacoes.style.display = "none";
            listarTrabalhos.style.display = "none";
            submissoesTrabalhos.style.display = "none";
            classificacao.style.display = "block";
            atividades.style.display = "none";
            cadastrarAreas.style.display = "none";
            listarAreas.style.display = "none";
            cadastrarRevisores.style.display = "none";
            listarRevisores.style.display = "none";
            cadastrarComissao.style.display = "none";
            definirCoordComissao.style.display = "none";
            listarComissao.style.display = "none";
            cadastrarModalidade.style.display = "none";
            listarModalidade.style.display = "none";
            editarEtiqueta.style.display = "none";
            editarEtiquetaSubTrabalhos.style.display = "none";
            cadastrarCriterio.style.display = "none";
            listarCriterios.style.display = "none";
        }
        if(id == 'atividades'){
            console.log('atividades');
            informacoes.style.display = "none";
            listarTrabalhos.style.display = "none";
            submissoesTrabalhos.style.display = "none";
            classificacao.style.display = "none";
            atividades.style.display = "block";
            cadastrarAreas.style.display = "none";
            listarAreas.style.display = "none";
            cadastrarRevisores.style.display = "none";
            listarRevisores.style.display = "none";
            cadastrarComissao.style.display = "none";
            definirCoordComissao.style.display = "none";
            listarComissao.style.display = "none";
            cadastrarModalidade.style.display = "none";
            listarModalidade.style.display = "none";
            editarEtiqueta.style.display = "none";
            editarEtiquetaSubTrabalhos.style.display = "none";
            cadastrarCriterio.style.display = "none";
            listarCriterios.style.display = "none";
        }
        if(id == 'cadastrarAreas'){
            console.log('cadastrarAreas');
            informacoes.style.display = "none";
            listarTrabalhos.style.display = "none";
            submissoesTrabalhos.style.display = "none";
            classificacao.style.display = "none";
            atividades.style.display = "none";
            cadastrarAreas.style.display = "block";
            listarAreas.style.display = "none";
            cadastrarRevisores.style.display = "none";
            listarRevisores.style.display = "none";
            cadastrarComissao.style.display = "none";
            definirCoordComissao.style.display = "none";
            listarComissao.style.display = "none";
            cadastrarModalidade.style.display = "none";
            listarModalidade.style.display = "none";
            editarEtiqueta.style.display = "none";
            editarEtiquetaSubTrabalhos.style.display = "none";
            cadastrarCriterio.style.display = "none";
            listarCriterios.style.display = "none";
        }
        if(id == 'listarAreas'){
            console.log('listarAreas');
            informacoes.style.display = "none";
            listarTrabalhos.style.display = "none";
            submissoesTrabalhos.style.display = "none";
            classificacao.style.display = "none";
            atividades.style.display = "none";
            cadastrarAreas.style.display = "none";
            listarAreas.style.display = "block";
            cadastrarRevisores.style.display = "none";
            listarRevisores.style.display = "none";
            cadastrarComissao.style.display = "none";
            definirCoordComissao.style.display = "none";
            listarComissao.style.display = "none";
            cadastrarModalidade.style.display = "none";
            listarModalidade.style.display = "none";
            editarEtiqueta.style.display = "none";
            editarEtiquetaSubTrabalhos.style.display = "none";
            cadastrarCriterio.style.display = "none";
            listarCriterios.style.display = "none";
        }

        if(id == 'cadastrarRevisores'){
            console.log('cadastrarRevisores');
            informacoes.style.display = "none";
            listarTrabalhos.style.display = "none";
            submissoesTrabalhos.style.display = "none";
            classificacao.style.display = "none";
            atividades.style.display = "none";
            cadastrarAreas.style.display = "none";
            listarAreas.style.display = "none";
            cadastrarRevisores.style.display = "block";
            listarRevisores.style.display = "none";
            cadastrarComissao.style.display = "none";
            definirCoordComissao.style.display = "none";
            listarComissao.style.display = "none";
            cadastrarModalidade.style.display = "none";
            listarModalidade.style.display = "none";
            editarEtiqueta.style.display = "none";
            editarEtiquetaSubTrabalhos.style.display = "none";
            cadastrarCriterio.style.display = "none";
            listarCriterios.style.display = "none";
        }
        if(id == 'listarRevisores'){
            console.log('listarRevisores');
            informacoes.style.display = "none";
            listarTrabalhos.style.display = "none";
            submissoesTrabalhos.style.display = "none";
            classificacao.style.display = "none";
            atividades.style.display = "none";
            cadastrarAreas.style.display = "none";
            listarAreas.style.display = "none";
            cadastrarRevisores.style.display = "none";
            listarRevisores.style.display = "block";
            cadastrarComissao.style.display = "none";
            definirCoordComissao.style.display = "none";
            listarComissao.style.display = "none";
            cadastrarModalidade.style.display = "none";
            listarModalidade.style.display = "none";
            editarEtiqueta.style.display = "none";
            editarEtiquetaSubTrabalhos.style.display = "none";
            cadastrarCriterio.style.display = "none";
            listarCriterios.style.display = "none";
        }
        if(id == 'cadastrarComissao'){
            console.log('cadastrarComissao');
            informacoes.style.display = "none";
            listarTrabalhos.style.display = "none";
            submissoesTrabalhos.style.display = "none";
            classificacao.style.display = "none";
            atividades.style.display = "none";
            cadastrarAreas.style.display = "none";
            listarAreas.style.display = "none";
            cadastrarRevisores.style.display = "none";
            listarRevisores.style.display = "none";
            cadastrarComissao.style.display = "block";
            definirCoordComissao.style.display = "none";
            listarComissao.style.display = "none";
            cadastrarModalidade.style.display = "none";
            listarModalidade.style.display = "none";
            editarEtiqueta.style.display = "none";
            editarEtiquetaSubTrabalhos.style.display = "none";
            cadastrarCriterio.style.display = "none";
            listarCriterios.style.display = "none";
        }
        if(id == 'definirCoordComissao'){
            console.log('definirCoordComissao');
            informacoes.style.display = "none";
            listarTrabalhos.style.display = "none";
            submissoesTrabalhos.style.display = "none";
            classificacao.style.display = "none";
            atividades.style.display = "none";
            cadastrarAreas.style.display = "none";
            listarAreas.style.display = "none";
            cadastrarRevisores.style.display = "none";
            listarRevisores.style.display = "none";
            cadastrarComissao.style.display = "none";
            definirCoordComissao.style.display = "block";
            listarComissao.style.display = "none";
            cadastrarModalidade.style.display = "none";
            listarModalidade.style.display = "none";
            editarEtiqueta.style.display = "none";
            editarEtiquetaSubTrabalhos.style.display = "none";
            cadastrarCriterio.style.display = "none";
            listarCriterios.style.display = "none";
        }
        if(id == 'listarComissao'){
            console.log('listarComissao');
            informacoes.style.display = "none";
            listarTrabalhos.style.display = "none";
            submissoesTrabalhos.style.display = "none";
            classificacao.style.display = "none";
            atividades.style.display = "none";
            cadastrarAreas.style.display = "none";
            listarAreas.style.display = "none";
            cadastrarRevisores.style.display = "none";
            listarRevisores.style.display = "none";
            cadastrarComissao.style.display = "none";
            definirCoordComissao.style.display = "none";
            listarComissao.style.display = "block";
            cadastrarModalidade.style.display = "none";
            listarModalidade.style.display = "none";
            editarEtiqueta.style.display = "none";
            editarEtiquetaSubTrabalhos.style.display = "none";
            cadastrarCriterio.style.display = "none";
            listarCriterios.style.display = "none";
        }
        if(id == 'cadastrarModalidade'){
            console.log('cadastrarModalidade');
            informacoes.style.display = "none";
            listarTrabalhos.style.display = "none";
            submissoesTrabalhos.style.display = "none";
            classificacao.style.display = "none";
            atividades.style.display = "none";
            cadastrarAreas.style.display = "none";
            listarAreas.style.display = "none";
            cadastrarRevisores.style.display = "none";
            listarRevisores.style.display = "none";
            cadastrarComissao.style.display = "none";
            definirCoordComissao.style.display = "none";
            listarComissao.style.display = "none";
            cadastrarModalidade.style.display = "block";
            listarModalidade.style.display = "none";
            editarEtiqueta.style.display = "none";
            editarEtiquetaSubTrabalhos.style.display = "none";
            cadastrarCriterio.style.display = "none";
            listarCriterios.style.display = "none";
        }
        if(id == 'listarModalidade'){
            console.log('listarModalidade');
            informacoes.style.display = "none";
            listarTrabalhos.style.display = "none";
            submissoesTrabalhos.style.display = "none";
            classificacao.style.display = "none";
            atividades.style.display = "none";
            cadastrarAreas.style.display = "none";
            listarAreas.style.display = "none";
            cadastrarRevisores.style.display = "none";
            listarRevisores.style.display = "none";
            cadastrarComissao.style.display = "none";
            definirCoordComissao.style.display = "none";
            listarComissao.style.display = "none";
            cadastrarModalidade.style.display = "none";
            listarModalidade.style.display = "block";
            editarEtiqueta.style.display = "none";
            editarEtiquetaSubTrabalhos.style.display = "none";
            cadastrarCriterio.style.display = "none";
            listarCriterios.style.display = "none";
        }
        if(id == 'submissoesTrabalhos'){
          informacoes.style.display = "none";
          listarTrabalhos.style.display = "none";
          submissoesTrabalhos.style.display = "block";
          classificacao.style.display = "none";
          atividades.style.display = "none";
          cadastrarAreas.style.display = "none";
          listarAreas.style.display = "none";
          cadastrarRevisores.style.display = "none";
          listarRevisores.style.display = "none";
          cadastrarComissao.style.display = "none";
          definirCoordComissao.style.display = "none";
          listarComissao.style.display = "none";
          cadastrarModalidade.style.display = "none";
          listarModalidade.style.display = "none";
          editarEtiqueta.style.display = "none";
          editarEtiquetaSubTrabalhos.style.display = "none";
          cadastrarCriterio.style.display = "none";
          listarCriterios.style.display = "none";
        }

        if(id == 'editarEtiqueta'){
            console.log('editarEtiqueta');
            informacoes.style.display = "none";
            listarTrabalhos.style.display = "none";
            submissoesTrabalhos.style.display = "none";
            classificacao.style.display = "none";
            atividades.style.display = "none";
            cadastrarAreas.style.display = "none";
            listarAreas.style.display = "none";
            cadastrarRevisores.style.display = "none";
            listarRevisores.style.display = "none";
            cadastrarComissao.style.display = "none";
            definirCoordComissao.style.display = "none";
            listarComissao.style.display = "none";
            cadastrarModalidade.style.display = "none";
            listarModalidade.style.display = "none";
            editarEtiqueta.style.display = "block";
            editarEtiquetaSubTrabalhos.style.display = "none";
            cadastrarCriterio.style.display = "none";
            listarCriterios.style.display = "none";
        }

        if(id == 'editarEtiquetaSubTrabalhos'){
            informacoes.style.display = "none";
            listarTrabalhos.style.display = "none";
            submissoesTrabalhos.style.display = "none";
            classificacao.style.display = "none";
            atividades.style.display = "none";
            cadastrarAreas.style.display = "none";
            listarAreas.style.display = "none";
            cadastrarRevisores.style.display = "none";
            listarRevisores.style.display = "none";
            cadastrarComissao.style.display = "none";
            definirCoordComissao.style.display = "none";
            listarComissao.style.display = "none";
            cadastrarModalidade.style.display = "none";
            listarModalidade.style.display = "none";
            editarEtiqueta.style.display = "none";
            editarEtiquetaSubTrabalhos.style.display = "block";
            cadastrarCriterio.style.display = "none";
            listarCriterios.style.display = "none";
        }

        if (id == 'cadastrarCriterio') {
            informacoes.style.display = "none";
            listarTrabalhos.style.display = "none";
            submissoesTrabalhos.style.display = "none";
            classificacao.style.display = "none";
            atividades.style.display = "none";
            cadastrarAreas.style.display = "none";
            listarAreas.style.display = "none";
            cadastrarRevisores.style.display = "none";
            listarRevisores.style.display = "none";
            cadastrarComissao.style.display = "none";
            definirCoordComissao.style.display = "none";
            listarComissao.style.display = "none";
            cadastrarModalidade.style.display = "none";
            listarModalidade.style.display = "none";
            editarEtiqueta.style.display = "none";
            editarEtiquetaSubTrabalhos.style.display = "none";
            cadastrarCriterio.style.display = "block";
            listarCriterios.style.display = "none";
        }
        if (id == 'listarCriterios') {
            informacoes.style.display = "none";
            listarTrabalhos.style.display = "none";
            submissoesTrabalhos.style.display = "none";
            classificacao.style.display = "none";
            atividades.style.display = "none";
            cadastrarAreas.style.display = "none";
            listarAreas.style.display = "none";
            cadastrarRevisores.style.display = "none";
            listarRevisores.style.display = "none";
            cadastrarComissao.style.display = "none";
            definirCoordComissao.style.display = "none";
            listarComissao.style.display = "none";
            cadastrarModalidade.style.display = "none";
            listarModalidade.style.display = "none";
            editarEtiqueta.style.display = "none";
            editarEtiquetaSubTrabalhos.style.display = "none";
            cadastrarCriterio.style.display = "none";
            listarCriterios.style.display = "block";
        }
    }



  </script>

@endsection
