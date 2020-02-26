@extends('admin.layouts.admin')

@section('cabecalho')
<div class="header pb-5 d-flex align-items-center"
    style="min-height: 350px;  background-size: cover; background-position: center top;">
    <span class="mask bg-gradient-dark	 opacity-8"></span>
    <div class="container-fluid d-flex align-items-center">
        <div class="row">
            <div class="col-lg-12 col-md-10">
                <h1 class="display-2 text-white"> <i class="fab fa-buromobelexperte text-white"></i> Campanhas</h1>
            </div>           
        </div>
    </div>
</div>
@stop

@if ($errors->any())
<div class="row">
    <div class="alert alert-danger alert-dismissible">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
</div>
@endif

@section('conteudo')
<div class="container-mt--7">
    <div class="col-md-12">
        <div class="card shadow">
            <div class="card-body bg-transparent">
            <form action="{{route('campanha.update', [ 'id' => $campanha->id ])}}" method="POST">
                        @csrf
                        {{ method_field('PUT') }}
                    <p class="text-success mt-2 font-weight-bold">Dados Gerais</p>
                    <hr>
                    <div class="form-group row">
                        <label for="" class="col-sm-3 col-form-label text-right">Ano </label>
                        <div class="col-md-2 mt-1">                            
                            <input type="text" name="ano" value="{{$campanha->ano}}" required class="form-control" maxlength="4">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="" class="col-sm-3 col-form-label text-right">Turno </label>
                        <div class="col-md-2 mt-1">
                        <select name="turno" class="form-control" required>
                                <option value=""> Turno </option>
                                <option value="1" {{ $campanha->turno == 1 ? 'selected' : '' }}>1º Turno</option>
                                <option value="2" {{ $campanha->turno == 2 ? 'selected' : '' }}>2º Turno</option>
                            </select>
                        </div>
                    </div>
                    <div class="card-footer text-center">
                    <a class="btn btn-outline-success  mt-2 p-2" href="{{route('campanha.index')}} "><i class="ni ni-bold-left"></i> Retorna </a>
                    <!-- <button type="submit" class="btn btn-success"><i class="ni ni-bold-left"></i>
                            Retorna</button> -->
                        <button type="submit" class="btn btn-success mt-2"><i class="ni ni-check-bold"></i>
                            Confirma</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    @stop

