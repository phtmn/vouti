<?php

namespace App\Http\Controllers\Admin;

use App\Models\CaboEleitoral;
use App\Models\User;
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
        return view('admin.cabos_eleitorais.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $result = DB::transaction(function() use ($request) {
            try {
                
                // $endereco = new Endereco;
                // $endereco->rua = $request->rua;
                // $endereco->numero = $request->numero;
                // $endereco->complemento = $request->complemento;
                // $endereco->bairro = $request->bairro;
                // $endereco->cidade = $request->cidade;
                // $endereco->uf = $request->uf;
                // $endereco->cep = $request->cep;
                // $endereco->save();
                
                $user_caboeleitoral           = new User;                
                $user_caboeleitoral->name     = $request->name;
                $user_caboeleitoral->email    = $request->email;
                $user_caboeleitoral->password = bcrypt($request->password);
                $user_caboeleitoral->papel_id = PapelEnum::EMPRESA;
                // $user_caboeleitoral->caboeleitoral_id = $caboeleitoral->id;
                $user_caboeleitoral->save();     

                     if ($request->hasFile('image')) {
                    $caboeleitoral['image']  = $request->image->move('/images/cabos_eleitorais');
                  }

                $caboeleitoral                  = new CaboEleitoral();
                $caboeleitoral->image           = $request->image;
                // $caboeleitoral->nome_completo   = $request->nome_completo;
                $caboeleitoral->cpf             = removeMaskCpf($request->cpf);    
                $caboeleitoral->telefone        = $request->telefone; 
                // $caboeleitoral->email           = $request->email; 
                // $caboeleitoral->senha           = $request->senha; 
                // $caboeleitoral->repetir_senha   = $request->repetir_senha;              
                $caboeleitoral->save();

                return redirect()->route('cabo_eleitoral.index')
                    ->with('msg', 'Cabo Eleitoral Cadastrado com sucesso!');
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
    public function edit($id)
    {
        $caboeleitoral = CaboEleitoral::find($id);
        return view('admin.cabos_eleitorais.edit', [
            'caboeleitoral' => $caboeleitoral, 
          ]);//
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\CaboEleitoral  $caboEleitoral
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        
        $caboeleitoral = CaboEleitoral::findOrFail($id);

        $result = DB::transaction(function() use ($request, $caboeleitoral) {
            try { 
                $caboeleitoral->image           = $request->image;               
                $caboeleitoral->nome_completo   = $request->nome_completo;
                $caboeleitoral->cpf             = removeMaskCpf($request->cpf);    
                $caboeleitoral->telefone        = $request->telefone; 
                $caboeleitoral->email           = $request->email; 
                $caboeleitoral->senha           = $request->senha; 
                $caboeleitoral->repetir_senha   = $request->repetir_senha;              
                $caboeleitoral->save();

                return redirect()->route('cabo_eleitoral.index')
                    ->with('msg', 'Cabo Eleitoral editado com sucesso!');
            }
            catch(Throwable $t) {
                return redirect()->route('cabo_eleitoral.index')
                    ->with('error', "Ocorreu um erro inesperado, tente novamente mais tarde" );
            }
        });

        return $result;////
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CaboEleitoral  $caboEleitoral
     * @return \Illuminate\Http\Response
     */
    public function destroy(CaboEleitoral $id)
    {
        $id->delete();        
        return redirect('cabo_eleitoral');//
    }
}
