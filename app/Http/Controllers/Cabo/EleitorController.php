<?php

namespace App\Http\Controllers\Cabo;

use App\Models\Eleitor;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use Illuminate\Support\Facades\DB;
use App\Enum\PapelEnum;
use App\Models\Candidato;
use App\Models\LocalVotacao;
use App\Models\Campanha;

class EleitorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('cabo.eleitor.index', [
            'data' => $data = Eleitor::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $candidatos = Candidato::all();
        $locais = LocalVotacao::all();
        $campanhas = Campanha::all();
        return view('cabo.eleitor.create', compact('candidatos', 'locais','campanhas'));
        // return view('cabo.eleitor.create', compact('candidatos', 'locais'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $result = DB::transaction(function() use ($request) {
            try {
                $eleitor = new Eleitor();
                $eleitor->nome = $request->nome;
                $eleitor->genero = $request->genero;
                $eleitor->data_nasc = $request->data_nasc;
                $eleitor->cpf = removeMaskCpf($request->cpf);
                $eleitor->rg = $request->rg;
                $eleitor->instagram = $request->instagram;
                $eleitor->facebook = $request->facebook;
                $eleitor->youtube = $request->youtube;
                $eleitor->cep = $request->cep;
                $eleitor->logradouro = $request->logradouro;
                $eleitor->num = $request->num;
                $eleitor->bairro = $request->bairro;
                $eleitor->cidade = $request->cidade;
                $eleitor->uf = $request->uf;
                $eleitor->num_titulo = $request->num_titulo;
                // $eleitor->campanha_id = $request->campanha;
                $eleitor->zona_id = $request->zona;
                $eleitor->secao = $request->secao;
                $eleitor->save();

                $eleitor->campanhas()->sync($request->get('campanha'));
                $eleitor->candidatos()->sync($request->get('candidato'));

                return redirect()->route('eleitor.index')
                    ->with('msg', 'Eleitor Cadastrada com sucesso!');
            }
            catch(Throwable $t) {
                return redirect()->route('eleitor.index')
                    ->with('error', "Ocorreu um erro inesperado, tente novamente mais tarde" );
            }
        });

        return $result;//
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Eleitor  $eleitor
     * @return \Illuminate\Http\Response
     */
    public function show(Eleitor $eleitor)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Eleitor  $eleitor
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $eleitor = Eleitor::find($id);
        

        $candidatos = Candidato::all();
        $locais = LocalVotacao::all();        
        $campanhas  = Campanha::all();     
                
        $camp_check = $eleitor->campanhas()->pluck('id');
        $cand_check = $eleitor->candidatos()->pluck('id');

        return view('cabo.eleitor.edit', compact('eleitor', 'candidatos', 'locais', 'campanhas', 'camp_check','cand_check'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Eleitor  $eleitor
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $eleitor = Eleitor::findOrFail($id);

        $result = DB::transaction(function() use ($request, $eleitor) {
            try {
                $eleitor->nome = $request->nome;
                $eleitor->genero = $request->genero;
                $eleitor->data_nasc = $request->data_nasc;
                $eleitor->cpf = removeMaskCpf($request->cpf);
                $eleitor->rg = $request->rg;
                $eleitor->instagram = $request->instagram;
                $eleitor->facebook = $request->facebook;
                $eleitor->youtube = $request->youtube;
                $eleitor->cep = $request->cep;
                $eleitor->logradouro = $request->logradouro;
                $eleitor->num = $request->num;
                $eleitor->bairro = $request->bairro;
                $eleitor->cidade = $request->cidade;
                $eleitor->uf = $request->uf;
                $eleitor->num_titulo = $request->num_titulo;
                $eleitor->campanha_id = $request->campanha;
                $eleitor->zona_id = $request->zona;
                $eleitor->secao = $request->secao;
                $eleitor->save();

                $eleitor->candidatos()->sync($request->get('candidato'));

                return redirect()->route('eleitor.index')
                    ->with('msg', 'Eleitor editado com sucesso!');
            }
            catch(Throwable $t) {
                return redirect()->route('eleitor.index')
                    ->with('error', "Ocorreu um erro inesperado, tente novamente mais tarde" );
            }
        });

        return $result;//
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Eleitor  $eleitor
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $eleitor = Eleitor::find($id);

        if ($eleitor) {

            $eleitor->campanhas()->detach();
            $eleitor->candidatos()->detach();
            $eleitor->delete();

            return redirect()->route('eleitor.index')->with('msg', 'Eleitor deletado com sucesso!');
        }

        return redirect()->route('eleitor.index')->with('msg', 'Erro ao deletar Eleitor!');
    }
}
