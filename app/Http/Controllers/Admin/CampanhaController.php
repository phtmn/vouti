<?php

namespace App\Http\Controllers\Admin;

use App\Models\Campanha;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use Illuminate\Support\Facades\DB;
use App\Enum\PapelEnum;

class CampanhaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.campanhas.index', [
            'data' => $data = Campanha::all()
          ]);    
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.campanhas.create-edit');
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
                $campanha = new Campanha();
                $campanha->ano = $request->ano;
                $campanha->turno = $request->turno;              
                $campanha->save();

                return redirect()->route('campanha.index')
                    ->with('msg', 'Campanha Cadastrada com sucesso!');
            }
            catch(Throwable $t) {
                return redirect()->route('campanha.index')
                    ->with('error', "Ocorreu um erro inesperado, tente novamente mais tarde" );
            }
        });

        return $result;//
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Campanha  $campanha
     * @return \Illuminate\Http\Response
     */
    public function show(Campanha $campanha)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Campanha  $campanha
     * @return \Illuminate\Http\Response
     */
    public function edit(Campanha $campanha)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Campanha  $campanha
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Campanha $campanha)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Campanha  $campanha
     * @return \Illuminate\Http\Response
     */
    public function destroy(Campanha $campanha)
    {
        //
    }
}
