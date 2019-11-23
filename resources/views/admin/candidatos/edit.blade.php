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
            <a href="{{route('candidato.index')}}" class="genric-btn primary text-uppercase"> <i class="fa fa-arrow-left"></i> Voltar</a>
        </div>
        <div class="section-top-border">
            <div class="row">
                <div class="col-lg-4 col-md-4">
                </div>
                <div class="col-lg-4 col-md-4">
                <form action="{{route('candidato.update', [ 'id' => $candidato->id ])}}" method="POST">
                        @csrf
                        {{ method_field('PUT') }}
                        <div class="mt-10">
                            <input type="text" name="nome_completo" value="{{$candidato->nome_completo}}" placeholder="Nome Completo" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Nome Completo'" required class="single-input" >
                        </div>
                        <div class="mt-10">
                            <input type="text" name="numero" value="{{$candidato->numero}}" placeholder="Nº" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Nº'" required class="single-input" maxlength="5">
                        </div>                     
                        <div class="default-select mt-10" id="default-select">
                            <select name="cargo" value=" " class="single-input"  required>
                                <option value="">Cargo</option>
                                <option value="1" {{ $candidato->cargo == 1 ? 'selected' : '' }}>Vereador</option>
                                <option value="2" {{ $candidato->cargo == 2 ? 'selected' : '' }}>Deputado Estadual</option>
                                <option value="3" {{ $candidato->cargo == 3 ? 'selected' : '' }}>Prefeito</option>
                                <option value="4" {{ $candidato->cargo == 4 ? 'selected' : '' }}>Deputado Federal</option>
                                <option value="5" {{ $candidato->cargo == 5 ? 'selected' : '' }}>Governador</option>
                                <option value="6" {{ $candidato->cargo == 6 ? 'selected' : '' }}>Senador</option>
                                <option value="7" {{ $candidato->cargo == 7 ? 'selected' : '' }}>Presidente</option>
                            </select>
                        </div>
                        <div class="button-group-area text-center">
                        <button type="submit" class="genric-btn primary-border text-uppercase"><i class="fa fa-save"></i> Salvar</button>
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

