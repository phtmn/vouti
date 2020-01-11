<?php

namespace App\Http\Controllers\Admin;

use App\Models\{CaboEleitoral, Campanha, Candidato, Eleitor, LocalVotacao};
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function index(){
        return view('admin.dashboard.index',[
            'campanhas' => Campanha::all()->count(),
            'candidatos'     => Candidato::all()->count(),
            'caboeleitoral'      => CaboEleitoral::all()->count(),
            'eleitor'      => Eleitor::all()->count(),
            'localvotacao'      => LocalVotacao::all()->count()
        ]);
    }

    public function painel(){
        return view('admin.painel.dashboard');
    }
}
