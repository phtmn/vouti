@extends('admin.layouts.admin')

@section('cabecalho')
<div class="header pb-5 d-flex align-items-center"
    style="min-height: 350px;  background-size: cover; background-position: center top;">
    <span class="mask bg-gradient-dark	 opacity-8"></span>
    <div class="container-fluid d-flex align-items-center">
        <div class="row">
            <div class="col-lg-12 col-md-10">
                <h1 class="display-2 text-white"> <i class="fas fa-id-card text-white"></i> Candidatos</h1>
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
                <form action="{{route('candidato.store')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <p class="text-success mt-2 font-weight-bold">Dados Gerais</p>
                    <hr>
                    <div class="form-group row">
                        <label for="" class="col-sm-3 col-form-label text-right">Imagem </label>
                        <div class="col-md-5 mt-1">
                            <input type="file" name="image" class="form-control">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="" class="col-sm-3 col-form-label text-right">Nome </label>
                        <div class="col-md-5 mt-1">
                            <input type="text" name="nome_completo" required class="form-control">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="" class="col-sm-3 col-form-label text-right">Nº </label>
                        <div class="col-md-2 mt-1">
                            <input type="text" name="numero" required class="form-control" maxlength="5">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="" class="col-sm-3 col-form-label text-right">Cargo </label>
                        <div class="col-md-3 mt-1">
                            <select name="cargo" value=" " class="form-control" id="exampleFormControlSelect1" required>
                                <option value="">Selecione</option>
                                <option value="1">Vereador</option>
                                <option value="2">Deputado Estadual</option>
                                <option value="3">Prefeito</option>
                                <option value="4">Deputado Federal</option>
                                <option value="5">Governador</option>
                                <option value="6">Senador</option>
                                <option value="7">Presidente</option>
                            </select>
                        </div>
                    </div>

                    
        


            <div class="card-footer text-center">
                <a class="btn btn-outline-success mt-2 p-2" href="{{route('candidato.index')}} "><i class="ni ni-bold-left"></i>
                    Retorna </a>
                <!-- <button type="submit" class="btn btn-success"><i class="ni ni-bold-left"></i>
                            Retorna</button> -->
                <button type="submit" class="btn btn-success mt-2 "><i class="ni ni-check-bold"></i>
                    Confirma</button>
            </div>
            </form>
        </div>
    </div>
</div>
@stop