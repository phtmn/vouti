<?php

namespace App\Http\Controllers\Admin;

use App\Models\CaboEleitoral;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Notifications\CaboEmail;

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
        $data = CaboEleitoral::all();
        return view('admin.cabos_eleitorais.index', compact('data'));

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
        if (User::where('email', $request->email)->exists()) {

            alert()->error('Não é possível cadastrar este cabo eletoral, pois verificamos no sistema que o e-mail já está em uso.', 'Oops!')->autoclose(8000);

            return redirect()->route('cabo_eleitoral.index');
        }

        // dd($request->all());
        $result = DB::transaction(function() use ($request) {
            try {

                $user = User::create([
                    'name'          => $request->name,
                    'email'         => $request->email,
                    'nome_partido'  => 'Partido dos Trabalhadores',
                    'sigla'         => 'PT',
                    'num_legenda'   => '13',
                    'password'      => bcrypt($request->password),
                    'papel_id'      => PapelEnum::CABO_ELEITORAL
                ]);

                $result = $user->cabo()->create([
                    'cpf'      => removeMaskCpf($request->cpf),
                    'telefone' => $request->telefone
                ]);

                // Upload image if send
                storeMedia($user, $request->file('image'), $request->name, 'cabo_eleitoral');

                $user->notify(new CaboEmail($request->password));

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

        return view('admin.cabos_eleitorais.edit', compact('caboeleitoral'));
    }

    // public function perfil($id)
    // {
    //     $caboeleitoral = CaboEleitoral::find($id);

    //     return view('cabo.perfil.index', compact('caboeleitoral'));
    // }

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

        $user = $caboeleitoral->user()->first();

        $user->update([
            'name'     => $request->name,
            'email'    => $request->email,
        ]);

        $caboeleitoral->update([
            'cpf'      => removeMaskCpf($request->cpf),
            'telefone' => $request->telefone
        ]);

        // Upload image if send
        storeMedia($user, $request->file('image'), $request->name, 'cabo_eleitoral', true);

        $result = DB::transaction(function() use ($request, $caboeleitoral) {
            try {
                return redirect()->route('cabo_eleitoral.index')
                    ->with('msg', 'Cabo Eleitoral editado com sucesso!');
            }
            catch(Throwable $t) {
                return redirect()->route('cabo_eleitoral.index')
                    ->with('error', "Ocorreu um erro inesperado, tente novamente mais tarde" );
            }
        });

        return $result;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CaboEleitoral  $caboEleitoral
     * @return \Illuminate\Http\Response
     */
    public function destroy($cabo)
    {
        $cabo = CaboEleitoral::findOrFail($cabo);
        $user = $cabo->user()->first();

        if ($cabo->delete()) {
            $user->delete();
        }
        return redirect()->route('cabo_eleitoral.index');
    }
}
