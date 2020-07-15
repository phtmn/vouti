@extends('cabo.layouts.cabo')

@section('cabecalho')
<div class="header pb-5 d-flex align-items-center"
    style="min-height: 350px;  background-size: cover; background-position: center top;">
    <span class="mask bg-gradient-dark	 opacity-8"></span>
    <div class="container-fluid d-flex align-items-center">
        <div class="row">
            <div class="col-lg-12 col-md-10">
                <h1 class="display-2 text-white"> <i class="fas fa-address-card text-white"></i> Eleitores</h1>
            </div>
        </div>
    </div>
</div>
@stop



@section('conteudo')

@if ($errors->any())
<div class="row">
    <div class="alert alert-danger alert-dismissible">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span
                aria-hidden="true">&times;</span></button>
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
                <form action="{{route('eleitor.store')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <p class="text-success mt-2 font-weight-bold">Dados Gerais</p>
                    <hr>
                    <div class="form-group row">
                        <label for="" class="col-sm-3 col-form-label text-right">Nome </label>
                        <div class="col-md-5 mt-1">
                            <input type="text" name="nome" required class="form-control">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="" class="col-sm-3 col-form-label text-right">Gênero </label>
                        <div class="col-md-2 mt-1">
                            <select name="genero" class="form-control" id="exampleFormControlSelect1">
                                <option value="">Gênero</option>
                                <option value="1">Masculino</option>
                                <option value="2">Feminino</option>
                                <option value="3">Outro</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="" class="col-sm-3 col-form-label text-right">Data de Nascimento </label>
                        <div class="col-md-3 mt-1">
                            <input type="date" name="data_nasc" class="form-control">
                            <!-- <input type="date" name="data_nasc"  class="form-control"  > -->
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="" class="col-sm-3 col-form-label text-right">CPF </label>
                        <div class="col-md-3 mt-1">
                            <input type="text" name="cpf" class="form-control" id="cpf">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="" class="col-sm-3 col-form-label text-right">RG </label>
                        <div class="col-md-2 mt-1">
                            <input type="text" name="rg" class="form-control">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="" class="col-sm-3 col-form-label text-right">CEP </label>
                        <div class="col-md-2 mt-1">
                            <input type="text" name="cep" class="form-control" id="cep">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="" class="col-sm-3 col-form-label text-right">Endereço </label>
                        <div class="col-md-5 mt-1">
                            <input type="text" name="logradouro" placeholder="Rua/Av." id="rua" class="form-control">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="" class="col-sm-3 col-form-label text-right">Número </label>
                        <div class="col-md-1 mt-1">
                            <input type="text" name="num" id="" class="form-control"  >
                        </div>
					</div>

                    <div class="form-group row">
                        <label for="" class="col-sm-3 col-form-label text-right">Bairro </label>
                        <div class="col-md-4 mt-1">
                            <input type="text" name="bairro" id="bairro" class="form-control">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="" class="col-sm-3 col-form-label text-right">Cidade </label>
                        <div class="col-md-4 mt-1">
                            <input type="text" name="cidade" id="cidade" class="form-control">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="" class="col-sm-3 col-form-label text-right">Estado </label>
                        <div class="col-md-1 mt-1">
                            <input type="text" name="uf" id="uf" class="form-control">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="" class="col-sm-3 col-form-label text-right">Instagram </label>
                        <div class="col-md-4 mt-1">
                            <input type="text" name="instagram" class="form-control">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="" class="col-sm-3 col-form-label text-right">Youtube </label>
                        <div class="col-md-4 mt-1">
                            <input type="text" name="youtube" class="form-control">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="" class="col-sm-3 col-form-label text-right">Facebook </label>
                        <div class="col-md-4 mt-1">
                            <input type="text" name="facebook" class="form-control">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="" class="col-sm-3 col-form-label text-right">Nº do Título Eleitoral </label>
                        <div class="col-md-3 mt-1">
                            <input type="text" name="num_titulo" class="form-control" maxlength="12" id="eleitor">
                        </div>
                    </div>

                   

                    <div class="form-group row">
                        <label for="" class="col-sm-3 col-form-label text-right">Zona </label>
                        <div class="col-md-2 mt-1">
                            <select name="zona" class="form-control" class="form-control"
                                id="exampleFormControlSelect1">
                                <option value="">Zona</option>
                                @foreach ($locais as $local)
                                <option value="{{ $local->id }}">{{ $local->zona }}</option>
                                @endforeach
                            </select>
                         
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="" class="col-sm-3 col-form-label text-right">Seção </label>
                        <div class="col-md-2 mt-1">
                            <input type="text" name="secao" class="form-control">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for=""
                            class="col-sm-3 col-form-label text-success text-right font-weight-bold">Campanha(s)
                        </label>
                        <div class="col-md-6 mt-1">
                            @foreach ($campanhas as $campanha)
                            @if(!isset($camp_check))
                            <div class="card mt-1">
                                <!-- Card body -->
                                <div class="card-body">
                                    <div class="row align-items-center">
                                        <div class="col-auto">

                                        </div>
                                        <div class="col ml--2">
                                            <h4 class="mb-0">
                                                <b> {{$campanha->ano}} </b>
                                                <small> {{($campanha->turno == '1')?'1º Turno' : '2º Turno'}} </small>
                                            </h4>
                                        </div>
                                        <div class="col-auto">
                                            <input name="campanha[]" value="{{ $campanha->id }}" type="checkbox">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="input-group">
                            
                                @else
                                <label><input name="campanha[]" value="{{ $campanha->id }}" type="checkbox"
                                        {{ ($camp_check->contains($campanha->id) ? 'checked' : '') }}>
                                    <h4 class="mb-0">
                                        <b> {{$campanha->ano}} </b>
                                        <small> {{($campanha->turno == '1')?'1º Turno' : '2º Turno'}} </small>
                                    </h4>
                                </label>
                                @endif
                            
                            </div>
                            @endforeach
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for=""
                            class="col-sm-3 col-form-label text-success text-right font-weight-bold">Candidato(s)
                        </label>
                        <div class="col-md-6 mt-1">
                            @foreach ($candidatos as $candidato)
                            @if(!isset($cand_check))
                            <div class="card mt-1">
                                <!-- Card body -->
                                <div class="card-body">
                                    <div class="row align-items-center">
                                        <div class="col-auto">                                            
                                            @if(!$candidato->thumb)
                                            <img src="{{asset('vendor/argon-dash/assets/img/brand/no_foto.png')}}"
                                                class="avatar rounded-circle mr-3" width="70" height="70">
                                            @else
                                            <img class="avatar rounded-circle mr-3" src="{{$candidato->thumb}} "
                                                width="70" height="70">

                                            @endif
                                        </div>
                                        <div class="col ml--2">
                                            <h4 class="mb-0">
                                                {{$candidato->nome_completo}}
                                            </h4>
                                            <p class="text-sm text-muted mb-0">
                                                @if (($candidato->cargo) == "1")
                                                <b> Vereador </b>
                                                @elseif (($candidato->cargo) == "2")
                                                <b> Deputado Estadual </b>
                                                @elseif (($candidato->cargo) == "3")
                                                <b> Prefeito </b>
                                                @elseif (($candidato->cargo) == "4")
                                                <b> Deputado Federal </b>
                                                @elseif (($candidato->cargo) == "5")
                                                <b> Governador </b>
                                                @elseif (($candidato->cargo) == "6")
                                                <b> Senador </b>
                                                @elseif (($candidato->cargo) == "7")
                                                <b> Presidente </b>
                                                @endif
                                            </p>
                                            <small>{{$candidato->numero}}</small>
                                        </div>
                                        <div class="col-auto">
                                            <input name="candidato[]" value="{{ $candidato->id }}" type="checkbox">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="input-group">
                                @else
                            
                                <label><input name="candidato[]" value="{{ $candidato->id }}" type="checkbox"
                                        {{ ($cand_check->contains($candidato->id) ? 'checked' : '') }}>
                                    [
                                    {{ $candidato->nome_completo }} ({{ $candidato->numero }}
                                    @if (($candidato->cargo) == "1")
                                    <b> Vereador </b>
                                    @elseif (($candidato->cargo) == "2")
                                    <b> Deputado Estadual </b>
                                    @elseif (($candidato->cargo) == "3")
                                    <b> Prefeito </b>
                                    @elseif (($candidato->cargo) == "4")
                                    <b> Deputado Federal </b>
                                    @elseif (($candidato->cargo) == "5")
                                    <b> Governador </b>
                                    @elseif (($candidato->cargo) == "6")
                                    <b> Senador </b>
                                    @elseif (($candidato->cargo) == "7")
                                    <b> Presidente </b>
                                    @endif)
                                    ]

                                </label>
                                @endif
                            </div>
                            @endforeach
                        </div>
                    </div>

                    <div class="card-footer text-center">
                        <a class="btn btn-outline-success  mt-2 p-2" href="{{route('eleitor.index')}} "><i
                                class="ni ni-bold-left"></i> Retorna </a>
                        <!-- <button type="submit" class="btn btn-success"><i class="ni ni-bold-left"></i>
                            Retorna</button> -->
                        <button type="submit" class="btn btn-success  mt-2"><i class="ni ni-check-bold"></i>
                            Confirma</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    @stop

    