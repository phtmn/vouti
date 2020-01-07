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
			<form action="{{route('local_votacao.store')}}" method="POST" enctype="multipart/form-data">
                        @csrf 
                    <p class="text-success mt-2 font-weight-bold">Dados Gerais</p>
                    <hr>
					<div class="form-group row">
                        <label for="" class="col-sm-3 col-form-label text-right">Nº da Zona Eleitoral </label>
                        <div class="col-md-2 mt-1">
                            <input type="text" name="zona" required class="form-control"  >
                        </div>
                    </div>
					
					<div class="form-group row">
                        <label for="" class="col-sm-3 col-form-label text-right">Local de Votação </label>
                        <div class="col-md-5 mt-1">
                            <input type="text" name="local"  class="form-control"  >
                        </div>
					</div>

					<div class="form-group row">
                        <label for="" class="col-sm-3 col-form-label text-right">CEP </label>
                        <div class="col-md-2 mt-1">
                            <input type="text" name="cep"  class="form-control"  >
                        </div>
					</div>

					<div class="form-group row">
                        <label for="" class="col-sm-3 col-form-label text-right">Endereço </label>
                        <div class="col-md-5 mt-1">
                            <input type="text" name="logradouro" placeholder="Rua/Av."  class="form-control"  >
                        </div>
					</div>

					<div class="form-group row">
                        <label for="" class="col-sm-3 col-form-label text-right">Bairro </label>
                        <div class="col-md-4 mt-1">
                            <input type="text" name="bairro"  class="form-control"  >
                        </div>
					</div>

					<div class="form-group row">
                        <label for="" class="col-sm-3 col-form-label text-right">Cidade </label>
                        <div class="col-md-4 mt-1">
                            <input type="text" name="cidade"  class="form-control"  >
                        </div>
					</div>

					<div class="form-group row">
                        <label for="" class="col-sm-3 col-form-label text-right">Estado </label>
                        <div class="col-md-1 mt-1">
                            <input type="text" name="uf"  class="form-control"  >
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

@section('conteudo')

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
	
		<div class="section-top-border">
			<div class="row">
				<div class="col-lg-3 col-md-3">

				</div>
				<div class="col-lg-6 col-md-6">
					<h3 class="mb-30">Form Element</h3>
					<form action="{{route('local_votacao.store')}}" method="POST" enctype="multipart/form-data">
                        @csrf   



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
									<input type="text" name="local" placeholder="Local de Votação" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Local de Votação'" required class="single-input">
								</div>
							</div>
							<div class="col-lg-3 mt-10">
								<div class="input-group">
									<input type="text" name="zona" placeholder="Zona" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Zona'" required class="single-input">
								</div>
							</div>
							<div class="col-lg-3 mt-10">
								<div class="input-group">
									<input type="text" name="secao" placeholder="Seção" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Seção'" required class="single-input">
								</div>
							</div>
						</div>
						<!-- <div class="row ">

							<div class="col-lg-12 mt-10">
								<div class="input-group">
									<input type="text" name="local" placeholder="Local de Votação" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Local de Votação'" required class="single-input">
								</div>
							</div>							
						</div> -->

						<div class="mt-10">
							<label> Endereço do local de votação </label>
							<hr>

						</div>
						<div class="row ">

							<div class="col-lg-4 mt-10">
								<div class="input-group">
									<input type="text" name="cep" placeholder="CEP" onfocus="this.placeholder = ''" onblur="this.placeholder = 'CEP'" required class="single-input">
								</div>
							</div>
							<div class="col-lg-8 mt-10">
								<div class="input-group">

									<input type="text" name="logradouro" placeholder="Rua/Av." onfocus="this.placeholder = ''" onblur="this.placeholder = 'Rua/Av.'" required class="single-input">
								</div>
							</div>							
						</div>

						<div class="row ">

							<div class="col-lg-2 mt-10">
								<div class="input-group">
									<input type="text" name="num" placeholder="Nº" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Nº'" required class="single-input">
								</div>
							</div>
							<div class="col-lg-4 mt-10">
								<div class="input-group">
									<input type="text" name="bairro" placeholder="Bairro" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Bairro'" required class="single-input">
								</div>
							</div>
							<div class="col-lg-4 mt-10">
								<div class="input-group">
									<input type="text" name="cidade" placeholder="Cidade" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Cidade'" required class="single-input">
								</div>
							</div>
							<div class="col-lg-2 mt-10">
								<div class="input-group">
									<input type="text" name="uf" placeholder="UF" onfocus="this.placeholder = ''" onblur="this.placeholder = 'UF'" required class="single-input">
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