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
				<p class="text-white link-nav">Candidatos <span class="lnr lnr-arrow-right"></span> <b class="text-white"> Candidatos Cadastrados </b></p>
			</div>
		</div>
	</div>
</section>

@stop

@section('content')

<div class="whole-wrap">
	<div class="container">

		<div class="button-group-area">
			<a href="{{route('candidato.create')}}" class="genric-btn primary  text-uppercase">Cadastrar Candidato</a>
		</div>

		<div class="section-top-border">
			<!-- <h3 class="mb-30">Campanhas Cadastradas</h3> -->
			<div class="progress-table-wrap">
				<div class="progress-table">
					<div class="table-head">
						<div class="serial">#</div>
						<div class="country">Nome Completo</div>
						<div class="visit">Cargo</div>
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


<div class="container mt--7">
	<div class="row">
		<div class="col-md-12">
			<div class="card shadow">
				<div class="card-header border-0">
					<a href="" class="btn btn-success "><i class="ni ni-fat-add"></i> Adicionar Projeto</a>
				</div>

				<div class="progress-table table-responsive">
					<table class="table align-items-center ">
						<thead class="thead-light">
							<tr>
								<th scope="col" class="text-left">#</th>
								<th scope="col" class="text-left">Nome</th>
								<th scope="col" class="text-left">Nº</th>
								<th scope="col" class="text-left">Cargo</th>
							</tr>
						</thead>
						<tbody>
							@forelse($data as $d)
							<tr>
								<td>
									{{$d->id}}
								</td>
								<td>
									{{$d->nome_completo}}
								</td>
								<td>
									{{$d->numero}}
								</td>
								<td>
									@if (($d->cargo) == "1")
									<b> Vereador </b>
										@elseif (($d->cargo) == "2")
										<b> Deputado Estadual </b>
											@elseif (($d->cargo) == "3")
											<b> Prefeito </b>
												@elseif (($d->cargo) == "4")
												<b> Deputado Federal </b>
													@elseif (($d->cargo) == "5")
													<b> Governador </b>
														@elseif (($d->cargo) == "6")
														<b> Senador </b>
															@elseif (($d->cargo) == "7")
															<b> Presidente </b>
									@endif
								</td>
								<td>
									<div class="media align-items-center">
										<div class="media-body">
											<a class="text-success" href="{{route('candidato.edit',$d->id)}}"> Editar</i></a>
											<form action="{{ route('candidato.destroy', ['id' => $d->id]) }}" method="post">
												{{ csrf_field() }}
												{{ method_field('DELETE') }}
												<div class="form-group">
													<button type="submit" class="btn btn-danger">Apagar</button>
												</div>
											</form>
										</div>										
									</div>
								</td>								
							</tr>
							@empty
							<p class="text-warning font-weight-bold 900" style="text-indent: 25px;">Você ainda não cadastrou nenhum candidato! <span></span></p>
							@endforelse
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>


@stop