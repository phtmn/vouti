@extends('admin.layouts.template.admin')

@section('content-header')
    <h1>Cadastrar Campanha</h1>
   

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

    @if ($errors->any())
    <div class="row">
        <div class="alert alert-danger alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        </div>
    @endif
    <div class="row">
        <div class="col-sm-12 col-lg-12 col-md-12">
            <div class="box box-primary">                
                <div class="box-body">
                    <div class="row">
                        @if(isset($sindicato))
                            {!! Form::model($sindicato,['route'=>['sindicatos.update',$sindicato->id]]) !!}
                            @method('PUT')
                        @else
                            {{ Form::open(['route'=>['sindicatos.store']]) }}
                        @endif

                        
                        <div class="col-md-12">
                        @include('admin.sindicatos.tabs.dadosGerais')
                            
                        </div>
                        <div class="form-group col-md-12">
                            {!! Form::submit('Salvar',['class'=>'btn btn-primary']) !!}
                            <a href="{{route('sindicatos.index')}}" class='btn btn-default'>Cancelar</a>
                        </div>
                        {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@stop

@section('js')
    <script src="{{ asset('js/viaCep.js') }}"></script>
    <script src="{{ asset('js/jquery.mask.min.js') }}"></script>

    <script>
      $(document).ready(function(){
        $("#telefone_1,#telefone_2").mask('(00)00000-0000');
        $("#presidente_telefone_1,#presidente_telefone_2").mask('(00)00000-0000');
        $("#responsavel_juridico_telefone_1,#responsavel_juridico_telefone_2").mask('(00)00000-0000');
        $("#responsavel_acesso_telefone_1,#responsavel_acesso_telefone_2").mask('(00)00000-0000');
        $("#cnpj").mask('00.000.000/0000-00');
        $("#numero_trabalhadores").mask('00000');
        $("#numero").mask('00000');
        $("#cep").mask('00000-000');
      });
    </script>
@stop