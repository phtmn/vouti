<?php

namespace App\Http\Controllers\Cabo;

use App\Models\{CaboEleitoral, Campanha, Candidato, Eleitor, LocalVotacao};
use App\Http\Controllers\Cabo\BaseController;
use Illuminate\Http\Request;

class DashboardController extends BaseController
{
  /**
   * Return index
   **/
  public function index(){
    return view('cabo.dashboard.index',[
        'campanhas' => Campanha::all()->count(),
        'candidatos'     => Candidato::all()->count(),
        'caboeleitoral'      => CaboEleitoral::all()->count(),
        'eleitor'      => Eleitor::all()->count(),
        'localvotacao'      => LocalVotacao::all()->count()
    ]);
}
}
