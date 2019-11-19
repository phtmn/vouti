<?php

namespace App\Http\Controllers\Admin;

use App\Models\CaboEleitoral;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use Illuminate\Support\Facades\DB;
use App\Enum\PapelEnum;

class CaboEleitoralController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.cabos_eleitorais.index', [
            'data' => $data = CaboEleitoral::all()
          ]); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.cabos_eleitorais.create-edit');
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
                $caboeleitoral                  = new CaboEleitoral();
                $caboeleitoral->nome_completo   = $request->nome_completo;
                $caboeleitoral->cpf             = $request->cpf;    
                $caboeleitoral->telefone        = $request->telefone; 
                $caboeleitoral->email           = $request->email; 
                $caboeleitoral->senha           = $request->senha; 
                $caboeleitoral->repetir_senha   = $request->repetir_senha;              
                $caboeleitoral->save();

                return redirect()->route('cabo_eleitoral.index')
                    ->with('msg', 'Candidato Cadastrado com sucesso!');
            }
            catch(Throwable $t) {
                return redirect()->route('cabo_eleitoral.index')
                    ->with('error', "Ocorreu um erro inesperado, tente novamente mais tarde" );
            }
        });

        return $result;//
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CaboEleitoral  $caboEleitoral
     * @return \Illuminate\Http\Response
     */
    public function show(CaboEleitoral $caboEleitoral)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CaboEleitoral  $caboEleitoral
     * @return \Illuminate\Http\Response
     */
    public function edit(CaboEleitoral $caboEleitoral)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\CaboEleitoral  $caboEleitoral
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CaboEleitoral $caboEleitoral)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CaboEleitoral  $caboEleitoral
     * @return \Illuminate\Http\Response
     */
    public function destroy(CaboEleitoral $caboEleitoral)
    {
        //
    }
}
