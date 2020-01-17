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
        $result = Campanha::withCount('eleitores')->get();

        return view('admin.campanhas.index', [
            'data' => $result
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.campanhas.create');
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
    public function edit($id)
    {
        $campanha = Campanha::find($id);
        return view('admin.campanhas.edit', [
            'campanha' => $campanha,
          ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Campanha  $campanha
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $campanha = Campanha::findOrFail($id);

        $result = DB::transaction(function() use ($request, $campanha) {
            try {
                $campanha->ano = $request->ano;
                $campanha->turno = $request->turno;
                $campanha->save();

                return redirect()->route('campanha.index')
                    ->with('msg', 'Campanha editada com sucesso!');
            }
            catch(Throwable $t) {
                return redirect()->route('campanha.index')
                    ->with('error', "Ocorreu um erro inesperado, tente novamente mais tarde" );
            }
        });

        return $result;//
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Campanha  $campanha
     * @return \Illuminate\Http\Response
     */
    public function destroy(Campanha $id)
    {
        $id->delete();
        return redirect()->route('campanha.index');
    }
}
