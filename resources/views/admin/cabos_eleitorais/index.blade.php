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
							<p class="text-white link-nav">Cabos Eleitorais <span class="lnr lnr-arrow-right"></span> <b class="text-white"> Cabos Eleitorais Cadastrados </b></p>
						</div>
					</div>
				</div>
			</section>

@stop

@section('content')

<div class="whole-wrap">
	<div class="container">

	<div class="button-group-area">
			<a href="{{route('cabo_eleitoral.create')}}" class="primary-btn  mt-4">Cadastrar Cabo Eleitoral</a>
		</div>

		<div class="section-top-border">
			<!-- <h3 class="mb-30">Campanhas Cadastradas</h3> -->
			<div class="progress-table-wrap">
				<div class="progress-table">
					<div class="table-head">
            <div class="serial font-weight-bold 900">#</div>
            <div class="serial font-weight-bold 900">Imagem</div>
						<div class="country font-weight-bold 900">Nome Completo</div>
						<div class="visit font-weight-bold 900">CPF</div>
						<div class="visit font-weight-bold 900">Telefone</div>
						<div class="visit font-weight-bold 900">Nº de Eleitores</div>
						<div class="percentage font-weight-bold 900">#</div>
					</div>
					@forelse($data as $d)
					<div class="table-row">
                        <div class="serial">{{ $d->id }}</div>
                        <div class="thumb">
                        <img class="img-fluid" src="{{ url($d->user->thumb) }}" alt="">
                        </div>
						<div class="country"> 	{{ $d->user->name }}</div>
						<div class="visit">{{ $d->cpf }}	</div>
						<div class="visit">{{ $d->telefone }}	</div>
						<div class="percentage">
						<a class="text-success" href="{{route('cabo_eleitoral.edit',$d->id)}}"> Editar</i></a>

						</div>
						<div class="percentage">

						<form action="{{ route('cabo_eleitoral.destroy', ['id' => $d->id]) }}" method="post">
												{{ csrf_field() }}
												{{ method_field('DELETE') }}

													<button type="submit" class="btn btn-danger">Apagar</button>

											</form>


						</div>


					</div>
					@empty
					<p class="text-danger mt-2 font-weight-bold 900" style="text-indent: 25px;">Você ainda não cadastrou nenhum cabo eleitoral! <span></span></p>
					@endforelse
				</div>
			</div>
		</div>
	</div>
</div>




@stop
