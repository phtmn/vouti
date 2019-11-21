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
			<a href="{{route('campanha.create')}}" class="genric-btn primary text-uppercase">Cadastrar Campanha</a>
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
					@forelse($data as $d)
						<div class="serial"> {{$d->id}}</div>
						<div class="country">  {{$d->ano}}</div>
						<div class="visit">{{$d->turno}}</div>
						<div class="percentage">
						
						</div>
					</div>
				
					@empty
                            <p class="text-warning font-weight-bold 900" style="text-indent: 25px;">Você ainda não cadastrou nenhum projeto! <span></span></p>
                            @endforelse
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
                                <th scope="col" class="text-left">Ano</th>
                                <th scope="col" class="text-left">Turno</th>                                                                
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($data as $d)
                            <tr>
                                <td>
                                     {{$d->id}}
                                </td>
                                <td>
									{{$d->ano}}	
								</td>  
								<td>
									{{$d->turno}}	
                                </td>                             
                                <td>
                                <div class="media align-items-center">
                                        <div class="media-body">
                                          {{--  <a class="text-success" href="{{route('projetos.edit',$d->id)}}"> Editar</i></a> --}}
                                        </div>
                                    </div>                                
                                </td>
                            </tr>
                            @empty
                            <p class="text-warning font-weight-bold 900" style="text-indent: 25px;">Você ainda não cadastrou nenhum projeto! <span></span></p>
                            @endforelse
                        </tbody>
                    </table>
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

<div class="table-responsive">
                    <table class="table  ">
                        <thead class="thead-light">
                            <tr>
                                <th scope="col" class="text-left">#</th>
                                <th scope="col" class="text-left">Ano</th>
                                <th scope="col" class="text-left">Turno</th>                                                                
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($data as $d)
                            <tr>
                                <td>
                                     {{$d->id}}
                                </td>
                                <td>
									{{$d->ano}}	
								</td>  
								<td>
                                {{($d->turno == '1')?'1º Turno' : '2º Turno'}} 	
                                </td>                             
                                <td>
                                <div class="media align-items-center">
                                        <div class="media-body">
                                          <a class="text-success" href="{{route('campanha.edit',$d->id)}}"> Editar</i></a> 
                                          <a class="text-success" href="{{route('campanha.destroy',$d->id)}}"> Apagar</i></a>  
                                        </div>
                                    </div>                                
                                </td>
                            </tr>
                            @empty
                            <p class="text-warning font-weight-bold 900" style="text-indent: 25px;">Você ainda não cadastrou nenhuma campanha! <span></span></p>
                            @endforelse
                        </tbody>
                    </table>
				</div>
				

				</div>
        </div>
    </div>
</div>

<br>
@stop