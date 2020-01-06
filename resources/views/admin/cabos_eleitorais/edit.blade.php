@extends('admin.layouts.admin')

@section('cabecalho')
<div class="header pb-5 d-flex align-items-center"
    style="min-height: 350px;  background-size: cover; background-position: center top;">
    <span class="mask bg-gradient-dark	 opacity-8"></span>
    <div class="container-fluid d-flex align-items-center">
        <div class="row">
            <div class="col-lg-12 col-md-10">
                <h1 class="display-2 text-white"> <i class="fas fa-chalkboard-teacher text-white"></i> Cabos Eleitorais</h1>
            </div>
        </div>
    </div>
</div>
@stop
@section('conteudo')

<div class="container-mt--7">
    <div class="col-md-12">
        <div class="card shadow">
            <div class="card-body bg-transparent">
            <form action="{{route('cabo_eleitoral.update', [ 'id' => $caboeleitoral->id ])}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        {{ method_field('PUT') }}
                    <p class="text-success mt-2 font-weight-bold">Dados Gerais</p>
                    <hr>
                    <div class="form-group row">
                        <label for="" class="col-sm-3 col-form-label text-right">Imagem </label>
                        <div class="col-md-5 mt-1">
                        <input type="file" name="image" placeholder="Foto" class="form-control" >
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="" class="col-sm-3 col-form-label text-right">Nome  </label>
                        <div class="col-md-5 mt-1">
                            <input type="text" name="name" value="{{ $caboeleitoral->user->name }}" required class="form-control" >
                        </div>
                    </div>                    
                    <div class="form-group row">
                        <label for="" class="col-sm-3 col-form-label text-right">CPF </label>
                        <div class="col-md-3 mt-1">
                            <input type="text" name="cpf" value="{{ $caboeleitoral->cpf }}" required class="form-control" id="cpf">
                        </div>
                    </div>                    
                    <div class="form-group row">
                        <label for="" class="col-sm-3 col-form-label text-right">Telefone </label>
                        <div class="col-md-3 mt-1">
                            <input type="text" name="telefone" value="{{ $caboeleitoral->telefone }}"  class="form-control" id="telefone" >
                        </div>
                    </div>  
                    <p class="text-success mt-2 px-4 font-weight-bold">Dados de Acesso ao Sistema</p>
                    <div class="form-group row">
                        <label for="" class="col-sm-3 col-form-label text-right">E-mail </label>
                        <div class="col-md-5 mt-1">                        
                            <input type="text" name="email" value="{{$caboeleitoral->user->email}}" readonly class="form-control"required >
                        </div>
                    </div>  
                                         
                    
                    <div class="card-footer text-center">
                    <a class="btn btn-outline-success" href="{{route('cabo_eleitoral.index')}} "><i class="ni ni-bold-left"></i> Retorna </a>
                    <!-- <button type="submit" class="btn btn-success"><i class="ni ni-bold-left"></i>
                            Retorna</button> -->
                        <button type="submit" class="btn btn-success"><i class="ni ni-check-bold"></i>
                            Confirma</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

@stop





