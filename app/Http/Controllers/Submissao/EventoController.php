<?php

namespace App\Http\Controllers\Submissao;

use App\Models\Submissao\Area;
use App\Models\Submissao\Atividade;
use App\Models\Submissao\Evento;
use App\Models\Users\Coautor;
use App\Models\Submissao\Criterio;
use App\Models\Users\Revisor;
use App\Models\Submissao\Atribuicao;
use App\Models\Submissao\Modalidade;
use App\Models\Users\ComissaoEvento;
use App\Models\Users\User;
use App\Models\Submissao\Trabalho;
use App\Models\Submissao\AreaModalidade;
use App\Models\Submissao\FormEvento;
use App\Models\Submissao\FormSubmTraba;
use App\Models\Submissao\RegraSubmis;
use App\Models\Submissao\TemplateSubmis;
use App\Models\Inscricao\Inscricao;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use App\Models\Submissao\Endereco;
use App\Mail\EventoCriado;
use Illuminate\Support\Facades\Mail;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreEventoRequest;
use App\Models\Submissao\Form;
use App\Models\Submissao\Opcao;
use App\Models\Submissao\Pergunta;
use App\Models\Submissao\Resposta;
use App\Models\Submissao\Paragrafo;

// dd($request->all());
class EventoController extends Controller
{
    public function index()
    {
        //
        $eventos = Evento::all();
        // $comissaoEvento = ComissaoEvento::all();
        // $eventos = Evento::where('coordenadorId', Auth::user()->id)->get();

        return view('coordenador.home',['eventos'=>$eventos]);

    }

    public function areaComissao() {
        $user = User::find(auth()->user()->id);
        $eventos = $user->membroComissaoEvento;

        return view('comissao.home')->with(['eventos' => $eventos]);      
    }

    public function informacoes(Request $request)
    {
        $evento = Evento::find($request->eventoId);
        
        $this->authorize('isCoordenadorOrComissao', $evento);

        $areasId = Area::where('eventoId', $evento->id)->select('id')->get();        
        $trabalhosId = Trabalho::whereIn('areaId', $areasId)->select('id')->get();
        $numeroRevisores = Revisor::where('evento_id', $evento->id)->count();
        $trabalhosEnviados = Trabalho::whereIn('areaId', $areasId)->count();
        $trabalhosPendentes = Trabalho::whereIn('areaId', $areasId)->where('avaliado', 'processando')->count();

        $trabalhosAvaliados = 0;
        foreach ($trabalhosId as $trabalho) {
          $trabalhosAvaliados += $trabalho->atribuicoes()->where('parecer', '!=', 'processando')->count();
        }
        
        $numeroComissao = count($evento->usuariosDaComissao);



        return view('coordenador.informacoes', [
                                                    'evento'                  => $evento,
                                                    'trabalhosEnviados'       => $trabalhosEnviados,
                                                    'trabalhosAvaliados'      => $trabalhosAvaliados,
                                                    'trabalhosPendentes'      => $trabalhosPendentes,
                                                    'numeroRevisores'         => $numeroRevisores,
                                                    'numeroComissao'          => $numeroComissao,

                                                  ]);

    }
    public function definirSubmissoes(Request $request)
    {
        $evento = Evento::find($request->eventoId);
        $this->authorize('isCoordenadorOrComissao', $evento);

        $etiquetas = FormEvento::where('eventoId', $evento->id)->first(); //etiquetas do card de eventos
        $etiquetasSubTrab = FormSubmTraba::where('eventoId', $evento->id)->first();

        return view('coordenador.trabalhos.definirSubmissoes', [
                                                    'evento'                  => $evento,
                                                  ]);

    }
    public function listarTrabalhos(Request $request, $column = 'titulo', $direction = 'asc')
    {
        $evento = Evento::find($request->eventoId);
        // $this->authorize('isCoordenadorOrComissao', $evento);
        // $users = $evento->usuariosDaComissao;

        $areas = Area::where('eventoId', $evento->id)->orderBy('nome')->get();
        $areasId = Area::where('eventoId', $evento->id)->select('id')->orderBy('nome')->get();


        $trabalhos = NULL;

        if($column == "autor") {
            // Não tem como ordenar os trabalhos por nome do autor automaticamente
            // Já que na tabale a de trabalhos não existe o nome do autor
            $trabalhos = Trabalho::whereIn('areaId', $areasId)->get()->sortBy(
                function($trabalho) {
                    return $trabalho->autor->name; // Ordena o pelo valor do nome do autor
                },
                SORT_REGULAR, // Usa o método padrão de ordenação
                $direction == "desc"); // Se true, então ordena decrescente
        } else {
            // Como aqui é um else, então $trabalhos nunca vai ser null
            // Busca os trabalhos da forma como era feita antes
            $trabalhos = Trabalho::whereIn('areaId', $areasId)->orderBy($column, $direction)->get();
        }

        
        // dd($trabalhos);
        return view('coordenador.trabalhos.listarTrabalhos', [
                                                    'evento'            => $evento,
                                                    'areas'             => $areas,
                                                    'trabalhos'         => $trabalhos,
                                                
                                                  ]);

    }
    public function cadastrarComissao(Request $request)
    {
        $evento = Evento::find($request->eventoId);
        $this->authorize('isCoordenadorOrComissao', $evento);
        $etiquetas = FormEvento::where('eventoId', $evento->id)->first(); //etiquetas do card de eventos
        $etiquetasSubTrab = FormSubmTraba::where('eventoId', $evento->id)->first();


        return view('coordenador.comissao.cadastrarComissao', [
                                                    'evento'                  => $evento,

                                                  ]);

    }

    public function cadastrarAreas(Request $request)
    {
        $evento = Evento::find($request->eventoId);
        $this->authorize('isCoordenadorOrComissao', $evento);
        $etiquetas = FormEvento::where('eventoId', $evento->id)->first(); //etiquetas do card de eventos
        $etiquetasSubTrab = FormSubmTraba::where('eventoId', $evento->id)->first();


        return view('coordenador.areas.cadastrarAreas', [
                                                    'evento'                  => $evento,

                                                  ]);

    }

    public function listarAreas(Request $request)
    {
        $evento = Evento::find($request->eventoId);
        $this->authorize('isCoordenadorOrComissao', $evento);
        $areas = Area::where('eventoId', $evento->id)->orderBy('nome')->get();

        return view('coordenador.areas.listarAreas', [
                                                    'evento'                  => $evento,
                                                    'areas'                   => $areas,

                                                  ]);
    }

    public function cadastrarRevisores(Request $request)
    {
      // return view('coordenador.revisores.cadastrarRevisores', [
      //             'evento'                  => $evento,
      //             'areas'                   => $areas,
      //             'modalidades'             => $modalidades,

      //           ]);

    }

    public function listarRevisores(Request $request)
    {
        $evento = Evento::find($request->eventoId);

        $this->authorize('isCoordenadorOrComissao', $evento);
        $revisores = User::join('revisors', 'users.id', '=', 'revisors.user_id')->where('revisors.evento_id', '=', $evento->id)->selectRaw('DISTINCT users.*')->get();
        // $revs = Revisor::where('evento_id', $evento->id)->with('user')->get();
        $areas = Area::where('eventoId', $evento->id)->get();
        $modalidades = Modalidade::where('evento_id', $evento->id)->get();

        return view('coordenador.revisores.listarRevisores', [
                                                    'evento'                  => $evento,
                                                    'revisores'               => $revisores,
                                                    // 'revs'                    => $revisores,
                                                    'areas'                   => $areas,
                                                    'modalidades'             => $modalidades,
                                                  ]);

    }

    public function listarUsuarios(Request $request)
    {
        $evento = Evento::find($request->evento_id);
        $this->authorize('isCoordenadorOrComissao', $evento);
        $usuarios = User::doesntHave('administradors')->get();

        return view('coordenador.revisores.listarUsuarios', compact('usuarios', 'evento'));

    }

    public function definirCoordComissao(Request $request)
    {
        $evento = Evento::find($request->eventoId);

        $this->authorize('isCoordenador', $evento);
        $users = $evento->usuariosDaComissao;


        return view('coordenador.comissao.definirCoordComissao', [
                                                    'evento'                  => $evento,
                                                    'users'                   => $users,

                                                  ]);

    }

    public function listarComissao(Request $request)
    {
        $evento = Evento::find($request->eventoId);

        $this->authorize('isCoordenadorOrComissao', $evento);
        $users = $evento->usuariosDaComissao;



        return view('coordenador.comissao.listarComissao', [
                                                    'evento'                  => $evento,
                                                    'users'                   => $users,

                                                  ]);

    }

    public function cadastrarModalidade(Request $request)
    {
        $evento = Evento::find($request->eventoId);
        $this->authorize('isCoordenadorOrComissao', $evento);
        $areas = Area::where('eventoId', $evento->id)->get();
        $modalidades = Modalidade::where('evento_id', $evento->id)->get();

        return view('coordenador.modalidade.cadastrarModalidade', [
                                                    'evento'                  => $evento,
                                                    'areas'                   => $areas,
                                                    'modalidades'             => $modalidades,

                                                  ]);

    }

    public function listarModalidade(Request $request)
    {
        $evento = Evento::find($request->eventoId);
        $this->authorize('isCoordenadorOrComissao', $evento);
        $modalidades = Modalidade::where('evento_id', $evento->id)->orderBy('nome')->get();
        $areasId = Area::where('eventoId', $evento->id)->select('id')->get();
        // $areaModalidades = AreaModalidade::whereIn('areaId', $areasId)->get();


        return view('coordenador.modalidade.listarModalidade', [
                                                    'evento'                  => $evento,
                                                    'modalidades'             => $modalidades,
                                                    // 'areaModalidades'         => $areaModalidades,

                                                  ]);

    }

    public function cadastrarCriterio(Request $request)
    {
        $evento = Evento::find($request->eventoId);
        $this->authorize('isCoordenadorOrComissao', $evento);
        $modalidades = Modalidade::where('evento_id', $evento->id)->get();

        return view('coordenador.modalidade.cadastrarCriterio', [
                                                    'evento'                  => $evento,
                                                    'modalidades'             => $modalidades,

                                                  ]);

    }

    public function listarCriterios(Request $request)
    {
        $evento = Evento::find($request->eventoId);
        $this->authorize('isCoordenadorOrComissao', $evento);
        $modalidades = Modalidade::where('evento_id', $evento->id)->orderBy('nome')->get();
        $etiquetas = FormEvento::where('eventoId', $evento->id)->first(); //etiquetas do card de eventos
        $etiquetasSubTrab = FormSubmTraba::where('eventoId', $evento->id)->first();

        // Criterios por modalidades
        $criteriosModalidade = [];
        foreach ($modalidades as $indice) {
          $criterios = Criterio::where("modalidadeId", $indice->id)->orderBy('nome')->get();
          for ($i=0; $i < count($criterios); $i++) {
            if (!in_array($criterios[$i],$criteriosModalidade)) {
              array_push($criteriosModalidade, $criterios[$i]);
            }
          }
        }

        return view('coordenador.modalidade.listarCriterio', [
                                                    'evento'                  => $evento,
                                                    'modalidades'             => $modalidades,
                                                    'criterios'               => $criteriosModalidade,
                                                  ]);

    }

    public function forms(Request $request)
    {
        $evento = Evento::find($request->eventoId);
        $modalidades = Modalidade::where('evento_id', $evento->id)->orderBy('nome')->get();
        
        return view('coordenador.modalidade.formulario', compact(
                                                                  'evento',
                                                                  'modalidades'
                                                                ));

    }

    public function atribuirForm(Request $request)
    {
      $evento = Evento::find($request->evento_id);
      $modalidade = Modalidade::find($request->modalidade_id);
      
      return view('coordenador.modalidade.atribuirFormulario', compact('evento', 'modalidade'));

    }

    public function salvarForm(Request $request)
    {
      $evento = Evento::find($request->evento_id);
      $modalidade = Modalidade::find($request->modalidade_id);
      $data = $request->all();
      // dd($data);
      $form = $modalidade->forms()->create([
          'titulo' => $data['tituloForm']
      ]);

      foreach ($data['pergunta'] as $key => $value) {
        $pergunta = $form->perguntas()->create([
          'pergunta' => $value
        ]);

        $resposta = new Resposta();
        $resposta->pergunta_id = $pergunta->id;
        $resposta->save();

        if($data['tipo'][$key] == 'paragrafo'){
          $paragrafo = new Paragrafo();
          $resposta->paragrafo()->save($paragrafo);

        }else if($data['tipo'][$key] == 'checkbox'){
          $resposta = $resposta->opcoes()->create([
            'titulo' => "titulo do checkbox",
            'tipo' => 'checkbox',
          ]);

        }
      }

      return view('coordenador.modalidade.atribuirFormulario', compact('evento','modalidade'));

    }
    
    public function visualizarForm(Request $request)
    {
      $evento = Evento::find($request->evento_id);
      $modalidade = Modalidade::find($request->modalidade_id);
      // $form = $modalidade->forms;
      $data = $request->all();

      return view('coordenador.modalidade.visualizarFormulario', compact('evento', 'modalidade'));

    }

    public function respostas(Request $request)
    {
      $evento = Evento::find($request->evento_id);
      $modalidade = Modalidade::find($request->modalidade_id);
      // $form = $modalidade->forms;
      $data = $request->all();

      return view('coordenador.modalidade.visualizarRespostas', compact('evento', 'modalidade'));

    }
    
    public function editarEtiqueta(Request $request)
    {
        $evento = Evento::find($request->eventoId);
        $this->authorize('isCoordenadorOrComissao', $evento);
        $etiquetas = FormEvento::where('eventoId', $evento->id)->first(); //etiquetas do card de eventos
        $etiquetasSubTrab = FormSubmTraba::where('eventoId', $evento->id)->first();
        $modalidades = Modalidade::all();
        // Criterios por modalidades
        $criteriosModalidade = [];
        foreach ($modalidades as $indice) {
          $criterios = Criterio::where("modalidadeId", $indice->id)->get();
          for ($i=0; $i < count($criterios); $i++) {
            if (!in_array($criterios[$i],$criteriosModalidade)) {
              array_push($criteriosModalidade, $criterios[$i]);
            }
          }
        }
        // dd($request);
        return view('coordenador.evento.editarEtiqueta', [
                                                    'evento'                  => $evento,
                                                    'etiquetas'               => $etiquetas,
                                                    'etiquetasSubTrab'        => $etiquetasSubTrab,
                                                    'criterios'               => $criteriosModalidade,
                                                  ]);

    }

    public function etiquetasTrabalhos(Request $request)
    {
        $evento = Evento::find($request->eventoId);
        $this->authorize('isCoordenadorOrComissao', $evento);
        $etiquetas = FormEvento::where('eventoId', $evento->id)->first(); //etiquetas do card de eventos
        $etiquetasSubTrab = FormSubmTraba::where('eventoId', $evento->id)->first();
        $modalidades = Modalidade::all();
        // Criterios por modalidades
        $criteriosModalidade = [];
        foreach ($modalidades as $indice) {
          $criterios = Criterio::where("modalidadeId", $indice->id)->get();
          for ($i=0; $i < count($criterios); $i++) {
            if (!in_array($criterios[$i],$criteriosModalidade)) {
              array_push($criteriosModalidade, $criterios[$i]);
            }
          }
        }

        return view('coordenador.evento.etiquetasTrabalhos', [
                                                    'evento'                  => $evento,
                                                    'etiquetas'               => $etiquetas,
                                                    'etiquetasSubTrab'        => $etiquetasSubTrab,
                                                    'criterios'               => $criteriosModalidade,
                                                  ]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('evento.criarEvento');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreEventoRequest $request)
    {
      $data = $request->all();
      $endereco = Endereco::create($data);        
      $data['enderecoId'] = $endereco->id;
      $data['coordenadorId'] = Auth::user()->id;
      $evento = Evento::create($data);

      $evento->coordenadorId = auth()->user()->id;
      $evento->deletado = false;
      $evento->save();
      // Se o evento tem foto
      if ($request->fotoEvento != null) {
        $evento->fotoEvento = $this->uploadFile($request, $evento);
        $evento->save();
      }

      $user = Auth::user();
      $subject = "Evento Criado";
      Mail::to($user->email)->send(new EventoCriado($user, $subject));
      
      $FormEvento = FormEvento::create([          
        'eventoId' => $evento->id,
      ]);       
      $FormSubmTraba = FormSubmTraba::create([   
        'eventoId' => $evento->id,
      ]);

      return redirect()->route('home');
    }

    public function uploadFile($request,$evento){
      if($request->hasFile('fotoEvento')){
        $image = $request->file('fotoEvento');
        $path = 'public/eventos/' . $evento->id;          
        $path = Storage::putFileAs($path, $image,"logo.png");
        return $path;
      }
      return null;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Evento  $evento
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $evento = Evento::find($id);
        $hasTrabalho = false;
        $hasTrabalhoCoautor = false;
        $hasFile = false;
        // $trabalhos = Trabalho::where('autorId', Auth::user()->id)->get();
        // $trabalhosCount = Trabalho::where('autorId', Auth::user()->id)->count();
        // $trabalhosId = Trabalho::where('eventoId', $evento->id)->select('id')->get();
        // $trabalhosIdCoautor = Coautor::whereIn('trabalhoId', $trabalhosId)->where('autorId', Auth::user()->id)->select('trabalhoId')->get();
        // $coautorCount = Coautor::whereIn('trabalhoId', $trabalhosId)->where('autorId', Auth::user()->id)->count();
        // $trabalhosCoautor = Trabalho::whereIn('id', $trabalhosIdCoautor)->get();
        $modalidades = Modalidade::where('evento_id', $evento->id)->get();
        $atividades = Atividade::where('eventoId', $id)->get();
        $primeiraAtividade = DB::table('atividades')->join('datas_atividades', 'atividades.id', 'datas_atividades.atividade_id')->select('data')->orderBy('data')->where('eventoId', '=', $id)->first();

        $isInscrito = Inscricao::where('user_id', Auth()->user()->id)->where('evento_id', $evento->id)->count();


        // if($trabalhosCount != 0){
        //   $hasTrabalho = true;
        //   $hasFile = true;
        // }
        // if($coautorCount != 0){
        //   $hasTrabalhoCoautor = true;
        //   $hasFile = true;
        // }

        $mytime = Carbon::now('America/Recife');
        $etiquetas = FormEvento::where('eventoId',$evento->id)->first();

        $formSubTraba = FormSubmTraba::all();

        if ($primeiraAtividade == null) {
          $primeiraAtividade = "";
        }
        return view('evento.visualizarEvento', [
                                                'evento'              => $evento,
                                                // 'trabalhos'           => $trabalhos,
                                                // 'trabalhosCoautor'    => $trabalhosCoautor,
                                                // 'hasTrabalho'         => $hasTrabalho,
                                                // 'hasTrabalhoCoautor'  => $hasTrabalhoCoautor,
                                                'hasFile'             => $hasFile,
                                                'mytime'              => $mytime,
                                                'etiquetas'           => $etiquetas,
                                                'modalidades'         => $modalidades,
                                                'formSubTraba'        => $formSubTraba,
                                                'atividades'          => $atividades,
                                                'dataInicial'         => $primeiraAtividade,
                                                'isInscrito'          => $isInscrito,
                                               ]);
    }

    public function showNaoLogado($id)
    {
        $evento = Evento::find($id);
        $hasTrabalho = false;
        $hasTrabalhoCoautor = false;
        $hasFile = false;
        $trabalhos = null;
        $trabalhosCoautor = null;
        $etiquetas = FormEvento::where('eventoId',$evento->id)->first();
        $formSubTraba = FormSubmTraba::all();
        $atividades = Atividade::where([['eventoId', $id], ['visibilidade_participante', true]])->get();
        $primeiraAtividade = DB::table('atividades')->join('datas_atividades', 'atividades.id', 'datas_atividades.atividade_id')->select('data')->orderBy('data')->where([['eventoId', '=', $id], ['visibilidade_participante', '=', true]])->first();
        $modalidades = Modalidade::where('evento_id', $id)->get();
        $mytime = Carbon::now('America/Recife');
        // dd(false);

        if ($primeiraAtividade == null) {
          $primeiraAtividade = "";
        }
        return view('evento.visualizarEvento', [
                                                'evento'              => $evento,
                                                'trabalhos'           => $trabalhos,
                                                'trabalhosCoautor'    => $trabalhosCoautor,
                                                'hasTrabalho'         => $hasTrabalho,
                                                'hasTrabalhoCoautor'  => $hasTrabalhoCoautor,
                                                'hasFile'             => $hasFile,
                                                'mytime'              => $mytime,
                                                'etiquetas'           => $etiquetas,
                                                'formSubTraba'        => $formSubTraba,
                                                'atividades'          => $atividades,
                                                'dataInicial'         => $primeiraAtividade,
                                                'modalidades'         => $modalidades,
                                               ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Evento  $evento
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // dd($id);
        $evento = Evento::find($id);
        $endereco = Endereco::find($evento->enderecoId);
        return view('evento.editarEvento',['evento'=>$evento,'endereco'=>$endereco]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Evento  $evento
     * @return \Illuminate\Http\Response
     */
    public function update(StoreEventoRequest $request, $id)
    {
        // $mytime = Carbon::now('America/Recife');
        // $this->authorize('isCoordenador', $evento);
        Log::info("Final");
        $data = $request->all();
        $evento = Evento::find($id);
        $evento->update($data);

        $evento->recolhimento = $request->recolhimento;
        $evento->update();

        $endereco = Endereco::find($evento->enderecoId);
        $evento->enderecoId           = $endereco->id;
        
        if($request->fotoEvento != null){
          if(Storage::disk()->exists('public/'.$evento->fotoEvento)) {
            Storage::delete($evento->fotoEvento);
          }
          $file = $request->fotoEvento;
          $path = 'public/eventos/' . $evento->id;
          $nome = '/logo.png';
          Storage::putFileAs($path, $file, $nome);
          $evento->fotoEvento = 'eventos/' . $evento->id . $nome;
        }

        $evento->save();
        
        $endereco->update($data);
        
        return redirect()->route('home');

        
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Evento  $evento
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $evento = Evento::find($id);
        // dd($evento);
        $evento->deletado = true;
        $evento->update();

        return redirect()->back()->with(['mensagem' => 'Evento deletado com sucesso']);
    }

    public function detalhes(Request $request){
        $evento = Evento::find($request->eventoId);

        $this->authorize('isCoordenador', $evento);
        $users = $evento->usuariosDaComissao;

        $areas = Area::where('eventoId', $evento->id)->get();
        $areasId = Area::where('eventoId', $evento->id)->select('id')->get();
        $trabalhosId = Trabalho::whereIn('areaId', $areasId)->select('id')->get();
        $revisores = Revisor::where('evento_id', $evento->id)->get();
        $modalidades = Modalidade::where('evento_id', $evento->id)->get();

        $trabalhos = Trabalho::whereIn('areaId', $areasId)->orderBy('id')->get();
        $trabalhosEnviados = Trabalho::whereIn('areaId', $areasId)->count();
        $trabalhosPendentes = Trabalho::whereIn('areaId', $areasId)->where('avaliado', 'processando')->count();
        $trabalhosAvaliados = 0;
        foreach ($trabalhosId as $trabalho) {
          $trabalhosAvaliados += $trabalho->atribuicoes()->where('parecer', '!=', 'processando')->count();
        }

        $numeroRevisores = Revisor::where('evento_id', $evento->id)->count();
        $numeroComissao = count($evento->usuariosDaComissao);

        $revs = Revisor::where('evento_id', $evento->id)->with('user')->get();
        $etiquetas = FormEvento::where('eventoId', $evento->id)->first(); 
        $etiquetasSubTrab = FormSubmTraba::where('eventoId', $evento->id)->first();

        $criteriosModalidade = [];
        foreach ($modalidades as $indice) {
          $criterios = Criterio::where("modalidadeId", $indice->id)->get();
          for ($i=0; $i < count($criterios); $i++) {
            if (!in_array($criterios[$i],$criteriosModalidade)) {
              array_push($criteriosModalidade, $criterios[$i]);
            }
          }
        }

        return view('coordenador.detalhesEvento', [
                                                    'evento'                  => $evento,
                                                    'areas'                   => $areas,
                                                    'revisores'               => $revisores,
                                                    'revs'                    => $revs,
                                                    'users'                   => $users,
                                                    'modalidades'             => $modalidades,
                                                    'trabalhos'               => $trabalhos,
                                                    'trabalhosEnviados'       => $trabalhosEnviados,
                                                    'trabalhosAvaliados'      => $trabalhosAvaliados,
                                                    'trabalhosPendentes'      => $trabalhosPendentes,
                                                    'numeroRevisores'         => $numeroRevisores,
                                                    'numeroComissao'          => $numeroComissao,
                                                    'etiquetas'               => $etiquetas,
                                                    'etiquetasSubTrab'        => $etiquetasSubTrab,
                                                    'criterios'               => $criteriosModalidade,
                                                  ]);
    }

    public function numTrabalhos(Request $request){
      $evento = Evento::find($request->eventoId);
      
      $validatedData = $request->validate([
        'eventoId'                => ['required', 'integer'],
        'trabalhosPorAutor'       => ['required', 'integer'],
        'numCoautor'              => ['required', 'integer']
      ]);

      $evento->numMaxTrabalhos = $request->trabalhosPorAutor;
      $evento->numMaxCoautores = $request->numCoautor;
      $evento->update();

      return redirect()->back()->with(['mensagem' => 'Restrições de submissão salvas com sucesso!']);
    }

    public function setResumo(Request $request){
      $evento = Evento::find($request->eventoId);
      
      $validatedData = $request->validate([
        'eventoId'                => ['required', 'integer'],
        'hasResumo'               => ['required', 'string']
      ]);
      if($request->hasResumo == 'true'){
        $evento->hasResumo = true;
      }
      else{
        $evento->hasResumo = false;
      }

      $evento->save();
      return redirect()->route('coord.detalhesEvento', ['eventoId' => $request->eventoId]);
    }

    public function setFotoEvento(Request $request){
      $evento = Evento::find($request->eventoId);
      
      // dd($request);
      $validatedData = $request->validate([
        'eventoId'                => ['required', 'integer'],
        'fotoEvento'              => ['required', 'file', 'mimes:png']
      ]);

      $file = $request->fotoEvento;
      $path = 'public/eventos/' . $evento->id;
      $nome = '/logo.png';
      Storage::putFileAs($path, $file, $nome);
      $evento->fotoEvento = $path . $nome;
      $evento->save();
      return redirect()->route('coord.detalhesEvento', ['eventoId' => $request->eventoId]);
    }

    public function habilitar($id) {
      $evento = Evento::find($id);
      $evento->publicado = true;
      $evento->update();
      return redirect()->back()->with('mensagem', 'O evento foi exposto ao público.');
    }

    public function desabilitar($id) {
      $evento = Evento::find($id);
      $evento->publicado = false;
      $evento->update();
      return redirect()->back()->with('mensagem', 'O evento foi ocultado ao público.');
    }

    public function downloadFotoEvento($id) {
      $evento = Evento::find($id);
      if (Storage::disk()->exists('public/'.$evento->fotoEvento)) {
        return Storage::download('public/'.$evento->fotoEvento);
      }
      return abort(404);
    }

    public function pdfProgramacao(Request $request, $id) {
      $evento = Evento::find($id);
      
      $request->validate([
        'pdf_programacao' => ['file', 'mimetypes:application/pdf']
      ]);

      $formEvento = FormEvento::where('eventoId', $id)->first();

      if ($evento->pdf_programacao != null) {
        Storage::delete('public/' . $evento->pdf_programacao);
      }

      if($request->pdf_programacao != null){
        $file = $request->pdf_programacao;
        $path = 'public/eventos/' . $evento->id;
        $nome = '/pdf-programacao.pdf';
        Storage::putFileAs($path, $file, $nome);
        $evento->pdf_programacao = 'eventos/' . $evento->id . $nome;
        $evento->exibir_calendario_programacao = false; 
        $evento->save();

        $formEvento->modprogramacao = true;
        $formEvento->update();
      } 
      
      return redirect()->back()->with(['mensagem' => 'PDF salvo com sucesso!']);
    }

    public function buscaLivre() {
      return view('evento.busca_eventos');
    }

    public function buscaLivreAjax(Request $request) {
      $eventos = null;
      switch ($request->tipo_busca) {
        case "nome":
          $eventos = Evento::join('enderecos', 'enderecos.id', '=', 'eventos.enderecoId')->where([["eventos.nome", "ilike", "%".$request->nome."%"], ['eventos.publicado', '=', true], ['eventos.deletado', '=', false]])->select('eventos.id as id_evento','eventos.*', 'enderecos.*')->get();
          break;
        case "tipo":
          $eventos = Evento::join('enderecos', 'enderecos.id', '=', 'eventos.enderecoId')->where([["eventos.tipo", "=", $request->tipo], ['eventos.publicado', '=', true], ['eventos.deletado', '=', false]])->select('eventos.id as id_evento','eventos.*', 'enderecos.*')->get();
          break;
        case "data_inicio": 
          $eventos = Evento::join('enderecos', 'enderecos.id', '=', 'eventos.enderecoId')->where([["eventos.dataInicio", "=", $request->data_inicio], ['eventos.publicado', '=', true], ['eventos.deletado', '=', false]])->select('eventos.id as id_evento','eventos.*', 'enderecos.*')->get();
          break;
        case "data_fim": 
          $eventos = Evento::join('enderecos', 'enderecos.id', '=', 'eventos.enderecoId')->where([["eventos.dataFim", "=", $request->data_fim], ['eventos.publicado', '=', true], ['eventos.deletado', '=', false]])->select('eventos.id as id_evento','eventos.*', 'enderecos.*')->get();
          break;
        case "nome_tipo": 
          $eventos = Evento::join('enderecos', 'enderecos.id', '=', 'eventos.enderecoId')->where([["eventos.nome", "ilike", "%".$request->nome."%"], ["eventos.tipo", "=", $request->tipo], ['eventos.publicado', '=', true], ['eventos.deletado', '=', false]])->select('eventos.id as id_evento','eventos.*', 'enderecos.*')->get();
          break;
        case "nome_data_inicio": 
          $eventos = Evento::join('enderecos', 'enderecos.id', '=', 'eventos.enderecoId')->where([["eventos.nome", "ilike", "%".$request->nome."%"], ["eventos.dataInicio", "=", $request->data_inicio], ['eventos.publicado', '=', true], ['eventos.deletado', '=', false]])->select('eventos.id as id_evento','eventos.*', 'enderecos.*')->get();
          break;
        case "nome_data_fim": 
          $eventos = Evento::join('enderecos', 'enderecos.id', '=', 'eventos.enderecoId')->where([["eventos.nome", "ilike", "%".$request->nome."%"], ["eventos.dataFim", "=", $request->data_fim], ['eventos.publicado', '=', true], ['eventos.deletado', '=', false]])->select('eventos.id as id_evento','eventos.*', 'enderecos.*')->get();
          break;
        case "tipo_data_inicio": 
          $eventos = Evento::join('enderecos', 'enderecos.id', '=', 'eventos.enderecoId')->where([["eventos.tipo", "=", $request->tipo], ["eventos.dataInicio", "=", $request->data_inicio], ['eventos.publicado', '=', true], ['eventos.deletado', '=', false]])->select('eventos.id as id_evento','eventos.*', 'enderecos.*')->get();
          break;
        case "tipo_data_fim": 
          $eventos = Evento::join('enderecos', 'enderecos.id', '=', 'eventos.enderecoId')->where([["eventos.tipo", "=", $request->tipo], ["eventos.dataFim", "=", $request->data_fim], ['eventos.publicado', '=', true], ['eventos.deletado', '=', false]])->select('eventos.id as id_evento','eventos.*', 'enderecos.*')->get();
          break;
        case "nome_datas": 
          $eventos = Evento::join('enderecos', 'enderecos.id', '=', 'eventos.enderecoId')->where([["eventos.nome", "ilike", "%".$request->nome."%"], ["eventos.dataInicio", "=", $request->data_inicio], ["eventos.dataFim", "=", $request->data_fim], ['eventos.publicado', '=', true], ['eventos.deletado', '=', false]])->select('eventos.id as id_evento','eventos.*', 'enderecos.*')->get();
          break;
        case "tipo_datas":
          $eventos = Evento::join('enderecos', 'enderecos.id', '=', 'eventos.enderecoId')->where([["eventos.tipo", "=", $request->tipo], ["eventos.dataInicio", "=", $request->data_inicio],  ["eventos.dataFim", "=", $request->data_fim], ['eventos.publicado', '=', true], ['eventos.deletado', '=', false]])->select('eventos.id as id_evento','eventos.*', 'enderecos.*')->get();
          break;
        case "datas": 
          $eventos = Evento::join('enderecos', 'enderecos.id', '=', 'eventos.enderecoId')->where([["eventos.dataInicio", "=", $request->data_inicio], ["eventos.dataFim", "=", $request->data_fim], ['eventos.publicado', '=', true], ['eventos.deletado', '=', false]])->select('eventos.id as id_evento','eventos.*', 'enderecos.*')->get();
          break;
        case "todos": 
          $eventos = Evento::join('enderecos', 'enderecos.id', '=', 'eventos.enderecoId')->where([["eventos.nome", "ilike", "%".$request->nome."%"], ["eventos.tipo", "=", $request->tipo], ["eventos.dataInicio", "=", $request->data_inicio], ["eventos.dataFim", "=", $request->data_fim], ['eventos.publicado', '=', true], ['eventos.deletado', '=', false]])->select('eventos.id as id_evento','eventos.*', 'enderecos.*')->get();
          break;
        default:
          $eventos = Evento::join('enderecos', 'enderecos.id', '=', 'eventos.enderecoId')->where("eventos.nome", "ilike", "%".$request->nome."%")->select('eventos.id as id_evento','eventos.*', 'enderecos.*')->get();
          break;
      }
      return response()->json($eventos);
    }
}
