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
        $data = Candidato::all();

        return view('admin.candidatos.index', compact('data'));
           
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
    // public function store(Request $request)
    // {
    //     $result = DB::transaction(function() use ($request) {
    //         try {
    //             $candidato                = new Candidato();
    //             $candidato->image         = $request->image;
    //             $candidato->nome_completo = $request->nome_completo;
    //             $candidato->numero        = $request->numero;    
    //             $candidato->cargo         = $request->cargo;              
    //             $candidato->save();

    //             return redirect()->route('candidato.index')
    //                 ->with('msg', 'Candidato Cadastrado com sucesso!');
    //         }
    //         catch(Throwable $t) {
    //             return redirect()->route('candidato.index')
    //                 ->with('error', "Ocorreu um erro inesperado, tente novamente mais tarde" );
    //         }
    //     });

    //     return $result;//
    // }

    public function store(Request $request)
    {
        //  dd($request->all());
        $result = DB::transaction(function() use ($request) {
            try {

                $candidato = Candidato::create([
                    'nome_completo'     => $request->nome_completo,
                    'numero'    => $request->numero,
                    'cargo'    => $request->cargo
                    // 'password' => bcrypt($request->password),
                    // 'papel_id' => PapelEnum::CABO_ELEITORAL
                ]);
                
                
                // $candidato->addMediaFromRequest('image')->toMediaCollection('images');
             
                // Upload image if send
                storeMedia($candidato, $request->file('image'), $request->nome_completo, 'candidato');

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

                if ($request->hasFile('image')) {
                    $candidato['image']  = $request->image->move('/images/candidatos');
                  }

                $candidato->image         = $request->image;
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
        return redirect()->route('candidato.index');            
    }
}
