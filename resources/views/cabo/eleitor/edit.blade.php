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
			<form action="{{route('eleitor.update', [ 'id' => $eleitor->id ])}}" method="POST">
                        @csrf
						{{ method_field('PUT') }}
                    <p class="text-success mt-2 font-weight-bold">Dados Gerais</p>
                    <hr>
                    <div class="form-group row">
                        <label for="" class="col-sm-3 col-form-label text-right">Nome </label>
                        <div class="col-md-5 mt-1">
                            <input type="text" name="nome" value="{{$eleitor->nome}}" required class="form-control">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="" class="col-sm-3 col-form-label text-right">Gênero </label>
                        <div class="col-md-2 mt-1">
                            <select name="genero" class="form-control" id="exampleFormControlSelect1">
							<option value="">Gênero</option>
											<option value="1" {{ $eleitor->genero == 1 ? 'selected' : '' }}>Masculino</option>
											<option value="2" {{ $eleitor->genero == 2 ? 'selected' : '' }}>Feminino</option>
											<option value="3" {{ $eleitor->genero == 3 ? 'selected' : '' }}>Outro</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="" class="col-sm-3 col-form-label text-right">Data de Nascimento </label>
                        <div class="col-md-3 mt-1">
                            <input type="date" name="data_nasc" value="{{$eleitor->data_nasc}}" class="form-control">
                            <!-- <input type="date" name="data_nasc"  class="form-control"  > -->
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="" class="col-sm-3 col-form-label text-right">CPF </label>
                        <div class="col-md-3 mt-1">
                            <input type="text" name="cpf" value="{{$eleitor->cpf}}" class="form-control" id="cpf">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="" class="col-sm-3 col-form-label text-right">RG </label>
                        <div class="col-md-2 mt-1">
                            <input type="text" name="rg" value="{{$eleitor->rg}}" class="form-control">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="" class="col-sm-3 col-form-label text-right">CEP </label>
                        <div class="col-md-2 mt-1">
                            <input type="text" name="cep" value="{{$eleitor->cep}}" class="form-control" id="cep">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="" class="col-sm-3 col-form-label text-right">Endereço </label>
                        <div class="col-md-5 mt-1">
                            <input type="text" name="logradouro" value="{{$eleitor->logradouro}}" placeholder="Rua/Av." class="form-control">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="" class="col-sm-3 col-form-label text-right">Bairro </label>
                        <div class="col-md-4 mt-1">
                            <input type="text" name="bairro" value="{{$eleitor->bairro}}" class="form-control">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="" class="col-sm-3 col-form-label text-right">Cidade </label>
                        <div class="col-md-4 mt-1">
                            <input type="text" name="cidade" value="{{$eleitor->cidade}}" class="form-control">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="" class="col-sm-3 col-form-label text-right">Estado </label>
                        <div class="col-md-1 mt-1">
                            <input type="text" name="uf" value="{{$eleitor->uf}}" class="form-control">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="" class="col-sm-3 col-form-label text-right">Instagram </label>
                        <div class="col-md-4 mt-1">
                            <input type="text" name="instagram" value="{{$eleitor->instagram}}" class="form-control">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="" class="col-sm-3 col-form-label text-right">Youtube </label>
                        <div class="col-md-4 mt-1">
                            <input type="text" name="youtube" value="{{$eleitor->youtube}}" class="form-control">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="" class="col-sm-3 col-form-label text-right">Facebook </label>
                        <div class="col-md-4 mt-1">
                            <input type="text" name="facebook" value="{{$eleitor->facebook}}" class="form-control">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="" class="col-sm-3 col-form-label text-right">Nº do Título Eleitoral </label>
                        <div class="col-md-3 mt-1">
                            <input type="text" name="num_titulo" value="{{$eleitor->num_titulo}}" class="form-control" maxlength="12" id="eleitor">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="" class="col-sm-3 col-form-label text-right">Campanha </label>
                        <div class="col-md-3 mt-1">
                            <select name="campanha" class="form-control" class="form-control" id="exampleFormControlSelect1"
                                required>
                                <option value="">Campanha</option>
                                @foreach ($campanhas as $campanha)
                                <option value="{{ $campanha->id }}">{{ $campanha->ano }}
                                    [{{($campanha->turno == '1')?'1º Turno' : '2º Turno'}}]</option>
                                @endforeach
                            </select>
                            <!-- <input type="text" name="zona" placeholder="Zona" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Zona'" required class="single-input"> -->
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="" class="col-sm-3 col-form-label text-right">Zona </label>
                        <div class="col-md-2 mt-1">
                            <select name="zona" class="form-control" class="form-control" id="exampleFormControlSelect1"
                                >
								<option value="">Zona</option>								
								@foreach ($locais as $local)
                                    <option value="{{ $local->id }}" {{ ($local->id == $eleitor->zona_id) ? 'selected' : '' }}>{{ $local->zona }}</option>
                                @endforeach
                            </select>
                            <!-- <input type="text" name="zona" placeholder="Zona" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Zona'" required class="single-input"> -->
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="" class="col-sm-3 col-form-label text-right">Seção </label>
                        <div class="col-md-2 mt-1">
                            <input type="text" name="secao" value="{{$eleitor->secao}}" class="form-control">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for=""
                            class="col-sm-3 col-form-label text-success text-right font-weight-bold">Candidato(s)
                        </label>
                        <div class="col-md-5 mt-1">
							@foreach ($candidatos as $candidato)
                                    <div class="input-group">
                                        <label>
                                            <input name="candidato[]" value="{{ $candidato->id }}" type="checkbox"
                                            @if (isset($cand_check))
                                            {{ $cand_check->contains($candidato->id) ? 'checked="checked"' : '' }}
                                            @endif
											> 
											
											[ {{ $candidato->nome_completo }} ({{ $candidato->numero }}
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
                                    @endif) ]

                                        </label>
                                    </div>
                                @endforeach		

                           
                        </div>
                    </div>




                    <div class="card-footer text-center">
                        <a class="btn btn-outline-success" href="{{route('eleitor.index')}} "><i
                                class="ni ni-bold-left"></i> Retorna </a>
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
	




@section('content')

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

<div class="whole-wrap">
	<div class="container">
		<div class="button-group-area">
			<a href="{{route('eleitor.index')}}" class="primary-btn  mt-4"> <i class="fa fa-arrow-left"></i> Voltar</a>
		</div>
		<div class="section-top-border">
			<div class="row">
				<div class="col-lg-3 col-md-3">

				</div>
				<div class="col-lg-6 col-md-6">
					<h3 class="mb-30">Form Element</h3>
					<form action="{{route('eleitor.update', [ 'id' => $eleitor->id ])}}" method="POST">
                        @csrf
						{{ method_field('PUT') }}

						<div class="mt-10">
							<label> Dados gerais </label>
							<hr>

						</div>
						<div class="row ">
							<div class="col-lg-8 mt-10">
								<div class="input-group">
									<input type="text" name="nome" value="{{$eleitor->nome}}" placeholder="Nome do eleitor" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Nome do eleitor'" required class="single-input">
								</div>
							</div>
							<div class="col-lg-4 mt-10">
								<div class="input-group">
									<div class="form-select" id="default-select">
										<select name="genero">
											<option value="">Gênero</option>
											<option value="1" {{ $eleitor->genero == 1 ? 'selected' : '' }}>Masculino</option>
											<option value="2" {{ $eleitor->genero == 2 ? 'selected' : '' }}>Feminino</option>
											<option value="3" {{ $eleitor->genero == 3 ? 'selected' : '' }}>Outro</option>
										</select>

									</div>
								</div>
							</div>
						</div>

						<div class="row ">
							<div class="col-lg-5 mt-10">
								<div class="input-group">
									<input type="text" name="data_nasc" value="{{$eleitor->data_nasc}}" placeholder="Data de nascimento" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Data de nascimento'" required class="single-input">
								</div>
							</div>
							<div class="col-lg-4 mt-10">
								<div class="input-group">
									<input type="text" name="cpf" value="{{$eleitor->cpf}}" placeholder="CPF" onfocus="this.placeholder = ''" onblur="this.placeholder = 'CPF'"  class="single-input">
								</div>
							</div>
							<div class="col-lg-3 mt-10">
								<div class="input-group">
									<input type="text" name="rg" value="{{$eleitor->rg}}" placeholder="RG" onfocus="this.placeholder = ''" onblur="this.placeholder = 'RG'"  class="single-input">
								</div>
							</div>
						</div>

						<div class="row ">

							<div class="col-lg-4 mt-10">
								<div class="input-group">
									<input type="text" name="instagram" value="{{$eleitor->instagram}}" placeholder="Instagram" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Instagram'"  class="single-input">
								</div>
							</div>
							<div class="col-lg-4 mt-10">
								<div class="input-group">
									<input type="text" name="facebook" value="{{$eleitor->facebook}}" placeholder="Facebook" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Facebook'"  class="single-input">
								</div>
							</div>
							<div class="col-lg-4 mt-10">
								<div class="input-group">
									<input type="text" name="youtube" value="{{$eleitor->youtube}}" placeholder="Youtube" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Youtube'"  class="single-input">
								</div>
							</div>
						</div>


						<div class="mt-10">
							<label> Endereço do eleitor </label>
							<hr>

						</div>

						<div class="row ">

							<div class="col-lg-4 mt-10">
								<div class="input-group">
									<input type="text" name="cep" value="{{$eleitor->cep}}" placeholder="CEP" onfocus="this.placeholder = ''" onblur="this.placeholder = 'CEP'"  class="single-input">
								</div>
							</div>
							<div class="col-lg-8 mt-10">
								<div class="input-group">
									<input type="text" name="logradouro" value="{{$eleitor->logradouro}}" placeholder="Rua/Av." onfocus="this.placeholder = ''" onblur="this.placeholder = 'Rua/Av.'"  class="single-input">
								</div>
							</div>
						</div>

						<div class="row ">

							<div class="col-lg-2 mt-10">
								<div class="input-group">
									<input type="text" name="num" value="{{$eleitor->num}}" placeholder="Nº" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Nº'"  class="single-input">
								</div>
							</div>
							<div class="col-lg-4 mt-10">
								<div class="input-group">
									<input type="text" name="bairro" value="{{$eleitor->bairro}}" placeholder="Bairro" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Bairro'"   class="single-input">
								</div>
							</div>
							<div class="col-lg-4 mt-10">
								<div class="input-group">
									<input type="text" name="cidade" value="{{$eleitor->cidade}}" placeholder="Cidade" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Cidade'"   class="single-input">
								</div>
							</div>
							<div class="col-lg-2 mt-10">
								<div class="input-group">
									<input type="text" name="uf" value="{{$eleitor->uf}}" placeholder="UF" onfocus="this.placeholder = ''" onblur="this.placeholder = 'UF'"   class="single-input">
								</div>
							</div>
						</div>

						<div class="mt-10">
							<label> Título de eleitor </label>
							<hr>

						</div>

						<div class="row ">
							<div class="col-lg-5 mt-10">
								<div class="input-group">
									<input type="text" name="num_titulo" value="{{$eleitor->num_titulo}}" placeholder="Nº do título eleitoral" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Nº do título eleitoral'" required class="single-input">
								</div>
							</div>
							<div class="col-lg-4 mt-10">
								<div class="input-group">

                                    <div class="form-select" id="default-select">
                                        <select name="zona">
                                            <option value="">Zona</option>
                                            @foreach ($locais as $local)
                                                <option value="{{ $local->id }}" {{ ($local->id == $eleitor->zona_id) ? 'selected' : '' }}>{{ $local->zona }}</option>
                                            @endforeach
                                        </select>
                                    </div>

                                </div>
							</div>
							<div class="col-lg-3 mt-10">
								<div class="input-group">
									<input type="text" name="secao" value="{{$eleitor->secao}}" placeholder="Seção" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Seção'" required class="single-input">
								</div>
							</div>
                        </div>

                        <div class="mt-10">
							<label> Candidatos </label>
							<hr>
                        </div>

                        <div class="row ">
                            <div class="col-lg-12 mt-10">
                                @foreach ($candidatos as $candidato)
                                    <div class="input-group">
                                        <label>
                                            <input name="candidato[]" value="{{ $candidato->id }}" type="checkbox"
                                            @if (isset($cand_check))
                                            {{ $cand_check->contains($candidato->id) ? 'checked="checked"' : '' }}
                                            @endif
                                            > {{ $candidato->nome_completo }}
                                        </label>
                                    </div>
                                @endforeach
							</div>
                        </div>



						<div class="button-group-area text-center">
							<button type="submit" class="primary-btn  mt-4 primary-border"><i class="fa fa-save"></i> Salvar</button>
						</div>


					</form>
				</div>
				<div class="col-lg-3 col-md-3">
				</div>
			</div>

		</div>
	</div>
</div>
@stop
