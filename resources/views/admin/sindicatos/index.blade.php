@extends('admin.layouts.template.admin')

@section('content-header')
<section class="relative about-banner" id="home">	
				<div class="overlay overlay-bg"></div>
				<div class="container">				
					<div class="row d-flex align-items-center justify-content-center">
						<div class="about-content col-lg-12">
							<h1 class="text-white">
								Elements		
							</h1>	
							<p class="text-white link-nav"><a href="index.html">Home </a>  <span class="lnr lnr-arrow-right"></span>  <a href="elements.html"> Elements</a></p>
						</div>	
					</div>
				</div>
			</section>

@stop

@section('content')

<section class="sample-text-area">
				<div class="container">
					<h3 class="text-heading">Text Sample</h3>
					<p class="sample-text">
						Every avid independent filmmaker has <b>Bold</b> about making that <i>Italic</i> interest documentary, or short film to show off their creative prowess. Many have great ideas and want to “wow” the<sup>Superscript</sup> scene, or video renters with their big project.  But once you have the<sub>Subscript</sub> “in the can” (no easy feat), how do you move from a <del>Strike</del> through of master DVDs with the <u>“Underline”</u> marked hand-written title inside a secondhand CD case, to a pile of cardboard boxes full of shiny new, retail-ready DVDs, with UPC barcodes and polywrap sitting on your doorstep?  You need to create eye-popping artwork and have your project replicated. Using a reputable full service DVD Replication company like PacificDisc, Inc. to partner with is certainly a helpful option to ensure a professional end result, but to help with your DVD replication project, here are 4 easy steps to follow for good DVD replication results: 

					</p>
				</div>
			</section>

<div class="box box-primary">
              <div class="box-header">
                  <a href="{{route('sindicatos.create')}}" class="btn bg-orange btn-flat">Cadastrar Campanha</a>
              </div>
                    <div class="box-body">
                        <table class="table table-bordered table-hover" id="table">
                            <thead>
                            <tr>
                                <th>Nº de REGISTRO ??? XXX </th>
                                <th>ANO</th>
                                <th>TURNO</th>                                
                                <th></th>
                            </tr>
                            </thead>
                            <tbody>
                            @forelse($data as $d)
                                <tr>
                                    <td><a href="{{ route('sindicatos.edit',$d->id ) }}">{{$d->razao_social}}</a></td>
                                    <td>{{ mask('##.###.###/####-##',$d->cnpj)}}</td>                               
                                    <td>{{$d->telefone_1}}</td>                                    
                                    <td>
                                        <a href="{{route('sindicato.categorias.listar', $d->id)}}" class="btn btn-xs bg-purple btn-flat">
                                            <i class="fa fa-list-ul" style="padding-right: 4px;"></i>Cadastrar/Vincular Candidatos</a>
                                        <!-- <a href="{{route('sindicato.participantes.listar', $d->id)}}" class="btn btn-xs bg-orange btn-flat">
                                            <i class="fa fa-list-ul" style="padding-right: 4px;"></i>Vincular Candidatos</a> -->
                                    </td>
                                    <td>
                            <a href="" class="btn btn-xs bg-purple btn-flat">Apagar</a>
                        </td>
                        <td>
                            <a href="" class="btn btn-xs bg-purple btn-flat">Editar</a>
                        </td>
                                </tr>
                            @empty
                                <p>Não existem dados</p>
                            @endforelse
                            </tbody>
                        </table>
                    </div>
        </div>
@stop
@section('js')
    <script>
        $(function () {
            $('#table').DataTable()
       })
    </script>

    @stop