@extends('admin.layouts.template.admin')

@section('content-header')
<section class="relative about-banner" id="home">	
				<div class="overlay overlay-bg"></div>
				<div class="container">				
					<div class="row d-flex align-items-center justify-content-center">
						<div class="about-content col-lg-12">
							<h1 class="text-white">
                            {{ Auth::user()->name }}		
							</h1>	
                            <p class="text-white link-nav">Candidatos <span class="lnr lnr-arrow-right"></span> <b class="text-white"> Cadastrar Candidato </b></p>
						</div>	
					</div>
				</div>
			</section>   

@stop
@section('content')


<div class="whole-wrap">
    <div class="container">
        <div class="button-group-area">
            <a href="{{route('candidato.index')}}" class="primary-btn  mt-4"> <i class="fa fa-arrow-left"></i> Voltar</a>
        </div>
        <div class="section-top-border">
            <div class="row">
                <div class="col-lg-4 col-md-4">
                </div>
                <div class="col-lg-4 col-md-4">
                <form action="{{route('candidato.store')}}" method="POST" enctype="multipart/form-data">
                        @csrf 
                        <div class="mt-10">
                        <label> Foto do candidato </label> 
                            <input type="file" name="image" placeholder="Foto" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Foto'" required class="single-input" >
                        </div>
                        <div class="mt-10">
                            <input type="text" name="nome_completo" placeholder="Nome Completo" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Nome Completo'" required class="single-input" >
                        </div>
                        <div class="mt-10">
                            <input type="text" name="numero" placeholder="Nº" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Nº'" required class="single-input" maxlength="5">
                        </div>                     
                        <div class="default-select mt-10" id="default-select">
                            <select name="cargo" value=" " class="single-input"  required>
                                <option value="">Cargo</option>
                                <option value="1">Vereador</option>
                                <option value="2">Deputado Estadual</option>
                                <option value="3">Prefeito</option>
                                <option value="4">Deputado Federal</option>
                                <option value="5">Governador</option>
                                <option value="6">Senador</option>
                                <option value="7">Presidente</option>
                            </select>
                        </div>
                        <div class="button-group-area text-center">
                        <button type="submit" class="primary-btn  mt-4 primary-border"><i class="fa fa-save"></i> Salvar</button>
                        </div>
                    </form>
                </div>
                <div class="col-lg-4 col-md-4">
                </div>
            </div>
        </div>
    </div>
</div>
    
@stop

