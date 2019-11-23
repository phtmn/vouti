<?php

namespace App\Http\Controllers\Admin;

use App\Models\Candidato;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use Illuminate\Support\Facades\DB;
use App\Enum\PapelEnum;

class CandidatoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.candidatos.index', [
            'data' => $data = Candidato::all()
          ]);     
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.candidatos.create');
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
                $candidato                = new Candidato();
                $candidato->nome_completo = $request->nome_completo;
                $candidato->numero        = $request->numero;    
                $candidato->cargo         = $request->cargo;              
                $candidato->save();

                return redirect()->route('candidato.index')
                    ->with('msg', 'Candidato Cadastrado com sucesso!');
            }
            catch(Throwable $t) {
                return redirect()->route('candidato.index')
                    ->with('error', "Ocorreu um erro inesperado, tente novamente mais tarde" );
            }
        });

        return $result;//
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Candidato  $candidato
     * @return \Illuminate\Http\Response
     */
    public function show(Candidato $candidato)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Candidato  $candidato
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $candidato = Candidato::find($id);
        return view('admin.candidatos.edit', [
            'candidato' => $candidato, 
          ]);//
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Candidato  $candidato
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $candidato = Candidato::findOrFail($id);

        $result = DB::transaction(function() use ($request, $candidato) {
            try {
                $candidato->nome_completo = $request->nome_completo;
                $candidato->numero        = $request->numero;    
                $candidato->cargo         = $request->cargo;              
                $candidato->save();

                return redirect()->route('candidato.index')
                    ->with('msg', 'Candidato editado com sucesso!');
            }
            catch(Throwable $t) {
                return redirect()->route('candidato.index')
                    ->with('error', "Ocorreu um erro inesperado, tente novamente mais tarde" );
            }
        });

        return $result;////
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Candidato  $candidato
     * @return \Illuminate\Http\Response
     */
    public function destroy(Candidato $id)
    {
        $id->delete();        
        return redirect('candidato');
    }
}
