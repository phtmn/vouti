<?php

namespace App\Http\Controllers\Admin;

use App\Models\LocalVotacao;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class LocalVotacaoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.locais_votacao.index', [
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
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
    public function edit(LocalVotacao $localVotacao)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\LocalVotacao  $localVotacao
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, LocalVotacao $localVotacao)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\LocalVotacao  $localVotacao
     * @return \Illuminate\Http\Response
     */
    public function destroy(LocalVotacao $localVotacao)
    {
        //
    }
}
