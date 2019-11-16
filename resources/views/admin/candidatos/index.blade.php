@extends('admin.layouts.template.admin')

@section('content-header')
<section class="relative about-banner" id="home">
	<div class="overlay overlay-bg"></div>
	<div class="container">
		<div class="row d-flex align-items-center justify-content-center">
			<div class="about-content col-lg-12">
				<h1 class="text-white">
					Candidatos
				</h1>
				<p class="text-white link-nav"><a href="index.html">Home </a> <span class="lnr lnr-arrow-right"></span> <a href="elements.html"> Elements</a></p>
			</div>
		</div>
	</div>
</section>

@stop

@section('content')

<div class="whole-wrap">
	<div class="container">		

	<div class="button-group-area">
			<a href="{{route('candidato.create')}}" class="genric-btn primary">Cadastrar Candidatos</a>
		</div>

		<div class="section-top-border">
			<h3 class="mb-30">Candidatos Cadastrados</h3>
			<div class="progress-table-wrap" >
				<div class="progress-table">
					<div class="table-head">
						<div class="serial">#</div>
						<div class="country">Nome</div>
						<div class="visit">Nº do Registro</div>
						<div class="percentage">Percentages</div>
					</div>
					<div class="table-row">
						<div class="serial">01</div>
						<div class="country"> <img src="img/elements/f1.jpg" alt="flag">Canada</div>
						<div class="visit">645032</div>
						<div class="percentage">
							<div class="progress">
								<div class="progress-bar color-1" role="progressbar" style="width: 80%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
							</div>
						</div>
					</div>
					<div class="table-row">
						<div class="serial">08</div>
						<div class="country"> <img src="img/elements/f8.jpg" alt="flag">Canada</div>
						<div class="visit">645032</div>
						<div class="percentage">
							<div class="progress">
								<div class="progress-bar color-8" role="progressbar" style="width: 60%" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>	
	</div>
</div>
@stop
