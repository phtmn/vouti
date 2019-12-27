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
			<a href="{{route('local_votacao.index')}}" class="primary-btn  mt-4"> <i class="fa fa-arrow-left"></i> Voltar</a>
		</div>
		<div class="section-top-border">
			<div class="row">
				<div class="col-lg-3 col-md-3">

				</div>
				<div class="col-lg-6 col-md-6">
					<h3 class="mb-30">Form Element</h3>
					

						<form action="{{route('local_votacao.update', [ 'id' => $local_votacao->id ])}}" method="POST">
                        @csrf   
						{{ method_field('PUT') }}

						<div class="mt-10">
							<label> Dados gerais </label>
							<hr>

						</div>
							
						
						<div class="mt-10">
							<label> Local de votação </label>
							<hr>

						</div>
						<div class="row ">
							<div class="col-lg-6 mt-10">
								<div class="input-group">
									<input type="text" name="local" value="{{$local_votacao->local}}" placeholder="Local de Votação" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Local de Votação'" required class="single-input">
								</div>
							</div>
							<div class="col-lg-3 mt-10">
								<div class="input-group">
									<input type="text" name="zona" value="{{$local_votacao->zona}}" placeholder="Zona" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Zona'" required class="single-input">
								</div>
							</div>
							<div class="col-lg-3 mt-10">
								<div class="input-group">
									<input type="text" name="secao" value="{{$local_votacao->secao}}" placeholder="Seção" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Seção'" required class="single-input">
								</div>
							</div>
						</div>

						<div class="mt-10">
							<label> Endereço do local de votação </label>
							<hr>

						</div>
						<div class="row ">

							<div class="col-lg-4 mt-10">
								<div class="input-group">
									<input type="text" name="cep" value="{{$local_votacao->cep}}" placeholder="CEP" onfocus="this.placeholder = ''" onblur="this.placeholder = 'CEP'" required class="single-input">
								</div>
							</div>
							<div class="col-lg-8 mt-10">
								<div class="input-group">

									<input type="text" name="logradouro" value="{{$local_votacao->logradouro}}" placeholder="Rua/Av." onfocus="this.placeholder = ''" onblur="this.placeholder = 'Rua/Av.'" required class="single-input">
								</div>
							</div>							
						</div>

						<div class="row ">

							<div class="col-lg-2 mt-10">
								<div class="input-group">
									<input type="text" name="num" value="{{$local_votacao->num}}" placeholder="Nº" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Nº'" required class="single-input">
								</div>
							</div>
							<div class="col-lg-4 mt-10">
								<div class="input-group">
									<input type="text" name="bairro" value="{{$local_votacao->bairro}}" placeholder="Bairro" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Bairro'" required class="single-input">
								</div>
							</div>
							<div class="col-lg-4 mt-10">
								<div class="input-group">
									<input type="text" name="cidade" value="{{$local_votacao->cidade}}" placeholder="Cidade" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Cidade'" required class="single-input">
								</div>
							</div>
							<div class="col-lg-2 mt-10">
								<div class="input-group">
									<input type="text" name="uf" value="{{$local_votacao->uf}}" placeholder="UF" onfocus="this.placeholder = ''" onblur="this.placeholder = 'UF'" required class="single-input">
								</div>
							</div>
						</div>
						<div class="button-group-area text-center">
							<button type="submit" class="primary-btn  mt-4 primary-border"><i class="fa fa-save"></i> Salvar</button>
						</div>

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