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
				<p class="text-white link-nav">Campanhas <span class="lnr lnr-arrow-right"></span> <b class="text-white"> Campanhas Cadastradas </b></p>
			</div>
		</div>
	</div>
</section>

@stop

@section('content')

<div class="whole-wrap">
	<div class="container">

		<div class="button-group-area">
			<a href="{{route('campanha.create')}}" class="genric-btn primary">Cadastrar Campanha</a>
		</div>

		<div class="section-top-border">
			<!-- <h3 class="mb-30">Campanhas Cadastradas</h3> -->
			<div class="progress-table-wrap">
				<div class="progress-table">
					<div class="table-head">
						<div class="serial">#</div>
						<div class="country">Ano</div>
						<div class="visit">Turno</div>
						<div class="percentage">#</div>
					</div>
					<div class="table-row">
						<div class="serial">01</div>
						<div class="country"> 2020</div>
						<div class="visit">1º Turno</div>
						<div class="percentage">
						
						</div>
					</div>
					<div class="table-row">
						<div class="serial">02</div>
						<div class="country"> 2020</div>
						<div class="visit">1º Turno</div>
						<div class="percentage">
							
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@stop