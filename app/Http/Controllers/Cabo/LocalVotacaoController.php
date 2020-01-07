<?php

namespace App\Http\Controllers\Cabo;

use App\Models\LocalVotacao;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use Illuminate\Support\Facades\DB;
use App\Enum\PapelEnum;

class LocalVotacaoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('cabo.locais_votacao.index', [
            'data' => $data = LocalVotacao::all()
          ]);  
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('cabo.locais_votacao.create');////
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
                $local_votacao = new LocalVotacao();              
                $local_votacao->local = $request->local;
                $local_votacao->zona = $request->zona;
                $local_votacao->secao = $request->secao;
                $local_votacao->cep = $request->cep;
                $local_votacao->logradouro = $request->logradouro;
                $local_votacao->num = $request->num;
                $local_votacao->bairro = $request->bairro;
                $local_votacao->cidade = $request->cidade;
                $local_votacao->uf = $request->uf;
                $local_votacao->save();

                return redirect()->route('local_votacao.index')
                    ->with('msg', 'Local de Votação Cadastrado com sucesso!');
            }
            catch(Throwable $t) {
                return redirect()->route('local_votacao.index')
                    ->with('error', "Ocorreu um erro inesperado, tente novamente mais tarde" );
            }
        });

        return $result;////
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\LocalVotacao  $localVotacao
     * @return \Illuminate\Http\Response
     */
    public function show(LocalVotacao $localVotacao)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\LocalVotacao  $localVotacao
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $local_votacao = LocalVotacao::find($id);
        return view('cabo.locais_votacao.edit', [
            'local_votacao' => $local_votacao, 
          ]);//
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\LocalVotacao  $localVotacao
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $local_votacao = LocalVotacao::findOrFail($id);
        
        $result = DB::transaction(function() use ($request, $local_votacao) {
            try {
                $local_votacao->local = $request->local;
                $local_votacao->zona = $request->zona;
                $local_votacao->secao = $request->secao;
                $local_votacao->cep = $request->cep;
                $local_votacao->logradouro = $request->logradouro;
                $local_votacao->num = $request->num;
                $local_votacao->bairro = $request->bairro;
                $local_votacao->cidade = $request->cidade;
                $local_votacao->uf = $request->uf;
                $local_votacao->save();

                return redirect()->route('local_votacao.index')
                    ->with('msg', 'Local de Votação editado com sucesso!');
            }
            catch(Throwable $t) {
                return redirect()->route('local_votacao.index')
                    ->with('error', "Ocorreu um erro inesperado, tente novamente mais tarde" );
            }
        });

        return $result;//
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\LocalVotacao  $localVotacao
     * @return \Illuminate\Http\Response
     */
    public function destroy(LocalVotacao $id)
    {
        $id->delete();     
        return redirect()->route('local_votacao.index');                
    }
}
