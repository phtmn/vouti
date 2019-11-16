<?php

namespace App\Http\Controllers\Admin;

use App\Models\CaboEleitoral;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CaboEleitoralController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $data = Campanha::orderBy('created_at', 'desc')->get();
       return view('admin.cabos_eleitorais.index',compact('data'));
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
        //
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
