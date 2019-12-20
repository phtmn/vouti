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
									<input type="text" name="zona" value="{{$eleitor->zona}}" placeholder="Zona" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Zona'" required class="single-input">
								</div>
							</div>
							<div class="col-lg-3 mt-10">
								<div class="input-group">
									<input type="text" name="secao" value="{{$eleitor->secao}}" placeholder="Seção" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Seção'" required class="single-input">
								</div>
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