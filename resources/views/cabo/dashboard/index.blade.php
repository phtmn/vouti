@extends('cabo.layouts.cabo')

@section('cabecalho')
<div class="header pb-5 d-flex align-items-center" style="min-height: 350px;  background-size: cover; background-position: center top;">
    <span class="mask bg-gradient-dark	 opacity-8"></span>
    <div class="container-fluid d-flex align-items-center">
        <div class="row">
            <div class="col-lg-12 col-md-10">
                <h1 class="display-2 text-white"> <i class="fas fa-file-contract text-white"></i> Dashboard</h1>
            </div>
        </div>
    </div>
</div>
@stop

@section('conteudo')

<section>
    <div class="container mt--7 ">
        <div class="row">

        <div class="col-xl-8  mt-3">
                <div class="card ">
                    <!-- <div class="card-header bg-gradient-success">
                           <h5 class="h3 mb-0"><span class="badge badge-pill badge-default"> </span> </h5>
                       </div> -->
                    <div class="card-header d-flex align-items-center">
                        <div class="d-flex align-items-center">
                            <div class="icon icon-shape bg-gradient-dark text-white rounded-circle shadow">
                                <i class="fas fa-users-cog"></i>
                            </div>

                            <div class="mx-3">
                                <a  class="text-dark font-weight-600 text-sm">Olá, {{ Auth::user()->name }}</a>
                                <small class="d-block text-muted">{{ Auth::user()->email }}</small>
                            </div>
                        </div>
                       
                    </div>

                </div>
            </div>
             <div class="col-xl-4  mt-3 ">
                <div class="card ">
                    <!-- <div class="card-header bg-gradient-success">
                           <h5 class="h3 mb-0"><span class="badge badge-pill badge-default"> </span> </h5>
                       </div> -->
                    <div class="card-header d-flex align-items-center">
                        <div class="d-flex align-items-center">
                            <div class="icon icon-shape bg-danger text-white rounded-circle shadow">
                                <i class="fas fa-file-alt"></i>
                            </div>

                         
                        </div>
                        <div class="text-right ml-auto">
                            <button type="button" class="btn btn-sm btn-danger btn-icon">                                
                                <span class="btn-inner--text">Termo de Uso</span>
                            </button>
                        </div>
                    </div>

                </div>
            </div>

            <div class="col-xl-8 mt-3">
                <div class="card ">

                    <div class="card-header d-flex align-items-center">
                        <div class="d-flex align-items-center">
                            <div class="icon icon-shape bg-lighter text-dark rounded-circle shadow">
                                {{ Auth::user()->num_legenda }}
                            </div>

                            <div class="mx-3">
                                <a class="text-dark font-weight-600 text-sm">{{ Auth::user()->nome_partido }}</a>
                                <small class="d-block text-muted">{{ Auth::user()->sigla }}</small>
                            </div>
                        </div>
                        <div class="text-right ml-auto">
                            <!-- <button type="button" class="btn btn-sm btn-warning btn-icon">
                                <span class="btn-inner--icon"><i class="fas fa-file-alt"></i></span>
                                <span class="btn-inner--text">site</span>
                            </button> -->
                        </div>
                    </div>

                </div>
            </div>

            <div class="col-xl-4 mt-3">
                <div class="card ">

                    <div class="card-header d-flex align-items-center">
                        <div class="d-flex align-items-center">
                            

                            <div class="mx-3">
                            <small>Módulo </small>
                            <span class="badge badge-pill badge-success"><a class="text-success">Gestor</a></span>
                            </div>
                            <div class="mx-3">
                            <small>Módulo </small>
                            <span class="badge badge-pill badge-success"><a class="text-success" target="_blank" href="{{ route('cabo.session.login') }}">Cabo Eleitoral</a></span>
                            </div>
                        </div>
                        <div class="text-right ml-auto">
                            <!-- <button type="button" class="btn btn-sm btn-warning btn-icon">
                                <span class="btn-inner--icon"><i class="fas fa-file-alt"></i></span>
                                <span class="btn-inner--text">site</span>
                            </button> -->
                        </div>
                    </div>

                </div>
            </div>

        </div>

        <div class="row">
            <div class="col-xl-4 mt-3">
                <div class="card">
                    <!-- <div class="card-header">
                    <h5 class="h3 mb-0">CAMPANHAS</h5>
                </div> -->
                    <div class="card-header d-flex align-items-center">
                        <div class="d-flex align-items-center">
                            <div class="icon icon-shape bg-lighter text-dark rounded-circle shadow">
                                <i class="fab fa-buromobelexperte"></i>
                            </div>
                            <div class="mx-3">
                                <a  class="text-dark font-weight-600 text-sm">CAMPANHAS</a>
                                <small class="d-block text-muted">{{ $campanhas }}</small>
                            </div>
                        </div>
                        <div class="text-right ml-auto">

                        </div>
                    </div>

                </div>
            </div>
            <div class="col-xl-4 mt-3">
                <div class="card">
                    <!-- <div class="card-header">
                    <h5 class="h3 mb-0">CANDIDATOS</h5>
                </div> -->
                    <div class="card-header d-flex align-items-center">
                        <div class="d-flex align-items-center">
                            <div class="icon icon-shape bg-lighter text-dark rounded-circle shadow">
                                <i class="fas fa-id-card"></i>
                            </div>
                            <div class="mx-3">
                                <a class="text-dark font-weight-600 text-sm">CANDIDATOS</a>
                                <small class="d-block text-muted">{{ $candidatos }}</small>
                            </div>
                        </div>
                        <div class="text-right ml-auto">
                            <!-- <button type="button" class="btn btn-lg btn-secondary btn-icon">
                            <span class="btn-inner--icon"><i class="fas fa-file-alt"></i></span>
                            <span class="btn-inner--text">Termo de Uso</span>
                        </button> -->
                        </div>
                    </div>

                </div>
            </div>
            <div class="col-xl-4 mt-3">
                <div class="card">
                    <!-- <div class="card-header">
                    <h5 class="h3 mb-0">CABOS ELEITORAIS</h5>
                </div> -->
                    <div class="card-header d-flex align-items-center">
                        <div class="d-flex align-items-center">
                            <div class="icon icon-shape bg-lighter text-dark  rounded-circle shadow">
                                <i class="fas fa-chalkboard-teacher"></i>
                            </div>
                            <div class="mx-3">
                                <a class="text-dark font-weight-600 text-sm">CABOS ELEITORAIS</a>
                                <small class="d-block text-muted">{{ $caboeleitoral }}</small>
                            </div>
                        </div>
                        <div class="text-right ml-auto">
                            <!-- <button type="button" class="btn btn-lg btn-secondary btn-icon">
                            <span class="btn-inner--icon"><i class="fas fa-file-alt"></i></span>
                            <span class="btn-inner--text">Termo de Uso</span>
                        </button> -->
                        </div>
                    </div>

                </div>
            </div>

            <div class="col-xl-6 mt-3">
                <div class="card ">

                    <div class="card-header d-flex align-items-center">
                        <div class="d-flex align-items-center">
                            <div class="icon icon-shape bg-lighter text-dark rounded-circle shadow">
                                <i class="fas fa-map-signs"></i>
                            </div>

                            <div class="mx-3">
                                <a class="text-dark font-weight-600 text-sm">Locais de Votação</a>
                                <small class="d-block text-muted">{{ $localvotacao }}</small>
                            </div>
                        </div>
                        <div class="text-right ml-auto">

                        </div>
                    </div>

                </div>
            </div>

            <div class="col-xl-6 mt-3">
                <div class="card ">

                    <div class="card-header d-flex align-items-center">
                        <div class="d-flex align-items-center">
                            <div class="icon icon-shape bg-success text-white rounded-circle shadow">
                                <i class="fas fa-address-card"></i>
                            </div>
                            <div class="mx-3">
                                <a class="text-dark font-weight-600 text-sm">Eleitores</a>
                                <small class="d-block text-muted">{{ $eleitor }}</small>
                            </div>
                        </div>
                        <div class="text-right ml-auto">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@stop