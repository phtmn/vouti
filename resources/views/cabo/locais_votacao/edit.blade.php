@extends('cabo.layouts.cabo')

@section('cabecalho')
<div class="header pb-5 d-flex align-items-center" style="min-height: 350px;  background-size: cover; background-position: center top;">
    <span class="mask bg-gradient-dark	 opacity-8"></span>
    <div class="container-fluid d-flex align-items-center">
        <div class="row">
            <div class="col-lg-12 col-md-10">
                <h1 class="display-2 text-white"> <i class="fas fa-map-signs text-white"></i> Locais de Votação</h1>
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
			<form action="{{route('local_votacao.update', [ 'id' => $local_votacao->id ])}}" method="POST">
                        @csrf   
						{{ method_field('PUT') }} 
                    <p class="text-success mt-2 font-weight-bold">Dados Gerais</p>
                    <hr>
					<div class="form-group row">
                        <label for="" class="col-sm-3 col-form-label text-right">Nº da Zona Eleitoral </label>
                        <div class="col-md-2 mt-1">
                            <input type="text" name="zona" value="{{$local_votacao->zona}}" required class="form-control"  >
                        </div>
                    </div>
					
					<div class="form-group row">
                        <label for="" class="col-sm-3 col-form-label text-right">Local de Votação </label>
                        <div class="col-md-5 mt-1">
                            <input type="text" name="local" value="{{$local_votacao->local}}" class="form-control"  >
                        </div>
					</div>

					<div class="form-group row">
                        <label for="" class="col-sm-3 col-form-label text-right">CEP </label>
                        <div class="col-md-2 mt-1">
                            <input type="text" name="cep" id="cep" value="{{$local_votacao->cep}}" class="form-control"  >
                        </div>
					</div>

					<div class="form-group row">
                        <label for="" class="col-sm-3 col-form-label text-right">Endereço </label>
                        <div class="col-md-5 mt-1">
                            <input type="text" name="logradouro" id="rua" value="{{$local_votacao->logradouro}}" placeholder="Rua/Av."  class="form-control"  >
                        </div>
					</div>

					<div class="form-group row">
                        <label for="" class="col-sm-3 col-form-label text-right">Bairro </label>
                        <div class="col-md-4 mt-1">
                            <input type="text" name="bairro" id="bairro" value="{{$local_votacao->bairro}}" class="form-control"  >
                        </div>
					</div>

					<div class="form-group row">
                        <label for="" class="col-sm-3 col-form-label text-right">Cidade </label>
                        <div class="col-md-4 mt-1">
                            <input type="text" name="cidade" id="cidade" value="{{$local_votacao->cidade}}" class="form-control"  >
                        </div>
					</div>

					<div class="form-group row">
                        <label for="" class="col-sm-3 col-form-label text-right">Estado </label>
                        <div class="col-md-1 mt-1">
                            <input type="text" name="uf" id="uf" value="{{$local_votacao->uf}}" class="form-control"  >
                        </div>
					</div>
					
                    
                    <div class="card-footer text-center">
                    <a class="btn btn-outline-success" href="{{route('local_votacao.index')}} "><i class="ni ni-bold-left"></i> Retorna </a>
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


