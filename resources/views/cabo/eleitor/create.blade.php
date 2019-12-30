@extends('cabo.layouts.template.admin')

@section('content-header')
<section class="relative about-banner" id="home">
	<div class="overlay overlay-bg"></div>
	<div class="container">
		<div class="row d-flex align-items-center justify-content-center">
			<div class="about-content col-lg-12">
				<h1 class="text-white">
					{{ Auth::user()->name }}
				</h1>
				<p class="text-white link-nav">Campanhas <span class="lnr lnr-arrow-right"></span> <b class="text-white"> Cadastrar Campanha </b></p>
			</div>
		</div>
	</div>
</section>

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
					<form action="{{route('eleitor.store')}}" method="POST" enctype="multipart/form-data">
                        @csrf


						<div class="mt-10">
							<label> Dados gerais </label>
							<hr>

						</div>
						<div class="row ">
							<div class="col-lg-8 mt-10">
								<div class="input-group">
									<input type="text" name="nome" placeholder="Nome do eleitor" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Nome do eleitor'" required class="single-input">
								</div>
							</div>
							<div class="col-lg-4 mt-10">
								<div class="input-group">
									<div class="form-select" id="default-select">
										<select name="genero">
											<option value="">Gênero</option>
											<option value="1">Masculino</option>
											<option value="2">Feminino</option>
											<option value="3">Outro</option>
										</select>

									</div>
								</div>
							</div>
						</div>

						<div class="row ">
							<div class="col-lg-5 mt-10">
								<div class="input-group">
									<input type="text" name="data_nasc" placeholder="Data de nascimento" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Data de nascimento'" required class="single-input">
								</div>
							</div>
							<div class="col-lg-4 mt-10">
								<div class="input-group">
									<input type="text" name="cpf" placeholder="CPF" onfocus="this.placeholder = ''" onblur="this.placeholder = 'CPF'"  class="single-input">
								</div>
							</div>
							<div class="col-lg-3 mt-10">
								<div class="input-group">
									<input type="text" name="rg" placeholder="RG" onfocus="this.placeholder = ''" onblur="this.placeholder = 'RG'"  class="single-input">
								</div>
							</div>
						</div>

						<div class="row ">

							<div class="col-lg-4 mt-10">
								<div class="input-group">
									<input type="text" name="instagram" placeholder="Instagram" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Instagram'"  class="single-input">
								</div>
							</div>
							<div class="col-lg-4 mt-10">
								<div class="input-group">
									<input type="text" name="facebook" placeholder="Facebook" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Facebook'"  class="single-input">
								</div>
							</div>
							<div class="col-lg-4 mt-10">
								<div class="input-group">
									<input type="text" name="youtube" placeholder="Youtube" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Youtube'"  class="single-input">
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
									<input type="text" name="cep" placeholder="CEP" onfocus="this.placeholder = ''" onblur="this.placeholder = 'CEP'"  class="single-input">
								</div>
							</div>
							<div class="col-lg-8 mt-10">
								<div class="input-group">
									<input type="text" name="logradouro" placeholder="Rua/Av." onfocus="this.placeholder = ''" onblur="this.placeholder = 'Rua/Av.'"  class="single-input">
								</div>
							</div>
						</div>

						<div class="row ">

							<div class="col-lg-2 mt-10">
								<div class="input-group">
									<input type="text" name="num" placeholder="Nº" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Nº'"  class="single-input">
								</div>
							</div>
							<div class="col-lg-4 mt-10">
								<div class="input-group">
									<input type="text" name="bairro" placeholder="Bairro" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Bairro'"   class="single-input">
								</div>
							</div>
							<div class="col-lg-4 mt-10">
								<div class="input-group">
									<input type="text" name="cidade" placeholder="Cidade" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Cidade'"   class="single-input">
								</div>
							</div>
							<div class="col-lg-2 mt-10">
								<div class="input-group">
									<input type="text" name="uf" placeholder="UF" onfocus="this.placeholder = ''" onblur="this.placeholder = 'UF'"   class="single-input">
								</div>
							</div>
						</div>

						<div class="mt-10">
							<label> Título de eleitor </label>
							<hr>
						</div>

						<div class="row ">
							<div class="col-lg-6 mt-10">
								<div class="input-group">
									<input type="text" name="num_titulo" placeholder="Nº do título eleitoral" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Nº do título eleitoral'" required class="single-input">
								</div>
							</div>
							</div>
							<div class="row ">
							<div class="col-lg-4 mt-10">
								<div class="input-group">
								<div class="form-select" id="default-select">
                                    <select name="zona">
                                        <option value="">Zona</option>
                                        @foreach ($locais as $local)
                                            <option value="{{ $local->id }}">{{ $local->zona }}</option>
                                        @endforeach
                                    </select>
								</div>
									<!-- <input type="text" name="zona" placeholder="Zona" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Zona'" required class="single-input"> -->
								</div>
							</div>
							<div class="col-lg-3 mt-10">
								<div class="input-group">
									<input type="text" name="secao" placeholder="Seção" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Seção'" required class="single-input">
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
                                        @if(!isset($cand_check))
                                            <label><input name="candidato[]" value="{{ $candidato->id }}" type="checkbox"> {{ $candidato->nome_completo }}</label>
                                        @else
                                            <label><input name="candidato[]" value="{{ $candidato->id }}" type="checkbox" {{ ($cand_check->contains($candidato->id) ? 'checked' : '') }}> {{ $candidato->nome_completo }}</label>
                                        @endif
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
