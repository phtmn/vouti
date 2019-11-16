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
            <a href="{{route('candidato.index')}}" class="genric-btn primary">Voltar</a>
        </div>
        <div class="section-top-border">
            <div class="row">
                <div class="col-lg-4 col-md-4">
                </div>
                <div class="col-lg-4 col-md-4">
                    <form action="#">
                        <div class="mt-10">
                            <input type="text" name="first_name" placeholder="Nome Completo" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Nome Completo'" required class="single-input" >
                        </div>
                        <div class="mt-10">
                            <input type="text" name="first_name" placeholder="Nº" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Nº'" required class="single-input" maxlength="5">
                        </div>                     
                        <div class="default-select mt-10" id="default-select">
                            <select>
                                <option value="0">Cargo</option>
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
                            <a href="{{route('campanha.index')}}" class="genric-btn primary-border "><i class="fa fa-save"></i> Salvar</a>
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

