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
                            <p class="text-white link-nav">Cabos Eleitorais <span class="lnr lnr-arrow-right"></span> <b class="text-white"> Cadastrar Cabo Eleitoral </b></p>
						</div>	
					</div>
				</div>
			</section>
   

@stop
@section('content')

<div class="whole-wrap">
    <div class="container">
        <div class="button-group-area">
            <a href="{{route('cabo_eleitoral.index')}}" class="genric-btn primary">Voltar</a>
        </div>
        <div class="section-top-border">
            <div class="row">
                <div class="col-lg-4 col-md-4">
                </div>
                <div class="col-lg-4 col-md-4">               
                    <form action="{{route('cabo_eleitoral.update', [ 'id' => $caboeleitoral->id ])}}" method="POST">
                        @csrf
                        {{ method_field('PUT') }}
                        <div class="mt-10">
                            <input type="text" name="nome_completo" value="{{$caboeleitoral->nome_completo}}" placeholder="Nome Completo" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Nome Completo'" required class="single-input" >
                        </div>
                        <div class="mt-10">
                            <input type="text" name="cpf" value="{{$caboeleitoral->cpf}}" placeholder="CPF" onfocus="this.placeholder = ''" onblur="this.placeholder = 'CPF'" required class="single-input" >
                        </div>                         
                        <div class="mt-10">
                            <input type="text" name="telefone" value="{{$caboeleitoral->telefone}}" placeholder="Telefone" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Telefone'" required class="single-input" >
                        </div>    
                        <label> Acesso ao Sistema </label> 
                        <div class="mt-10">
                            <input type="text" name="email" value="{{$caboeleitoral->email}}" placeholder="E-mail" onfocus="this.placeholder = ''" onblur="this.placeholder = 'E-mail'" required class="single-input" >
                        </div>                     
                        <div class="mt-10">
                            <input type="password" name="senha" value="{{$caboeleitoral->senha}}" placeholder="Senha" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Senha'" required class="single-input" >
                        </div> 
                        <div class="mt-10">
                            <input type="password" name="repetir_senha" value="{{$caboeleitoral->repetir_senha}}" placeholder="Repetir Senha" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Repetir Senha'" required class="single-input" >
                        </div>                     
                        <!-- <div class="default-select mt-10" id="default-select">
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
                        </div> -->
                        <div class="button-group-area text-center">
                        <button type="submit" class="genric-btn primary-border"><i class="fa fa-save"></i> Salvar</button>
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

