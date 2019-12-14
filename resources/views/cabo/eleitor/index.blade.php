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
				<p class="text-white link-nav">Eleitor <span class="lnr lnr-arrow-right"></span> <b class="text-white"> Eleitores Cadastrados </b></p>
			</div>
		</div>
	</div>
</section>

@stop

@section('content')

<div class="whole-wrap">
	<div class="container">

		<div class="button-group-area">
			<a href="{{route('cabo.eleitor.create')}} " class="primary-btn  mt-4">Cadastrar Eleitor</a>
		</div>

		<div class="section-top-border">
			<!-- <h3 class="mb-30">Campanhas Cadastradas</h3> -->
			<div class="progress-table-wrap">
				<div class="progress-table">
					<div class="table-head">
						<div class="serial font-weight-bold 900">#</div>
						<div class="country font-weight-bold 900">Nome Completo</div>
						<div class="visit font-weight-bold 900">Nº</div>
						<div class="percentage font-weight-bold 900">Cargo</div>
						<div class="percentage font-weight-bold 900">#</div>
						<div class="percentage font-weight-bold 900">#</div>
					</div>
					
					<div class="table-row">
						<div class="serial"> </div>
						<div class="country">  </div>
						<div class="visit"> </div>
						<div class="percentage">
						
						</div>
						<div class="percentage">
					
						</div>
						<div class="percentage">
						
												</div>
										
						</div>
					
					
					<p class="text-danger mt-2 font-weight-bold 900" style="text-indent: 25px;">Você ainda não cadastrou nenhum candidato! <span></span></p>
			
					</div>
				</div>
			</div>
		</div>
	</div>
</div>


@stop