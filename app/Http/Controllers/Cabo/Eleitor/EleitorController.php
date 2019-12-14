<?php

namespace App\Http\Controllers\Cabo\Eleitor;

use App\Models\Eleitor;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class EleitorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('cabo.eleitor.index'); //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('cabo.eleitor.create');//
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
    public function edit(Eleitor $eleitor)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Eleitor  $eleitor
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Eleitor $eleitor)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Eleitor  $eleitor
     * @return \Illuminate\Http\Response
     */
    public function destroy(Eleitor $eleitor)
    {
        //
    }
}
