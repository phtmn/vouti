@extends('admin.layouts.template.admin')

@section('content-header')
    <h1>
        Cadastro de Benefícios
    </h1>
    <ol class="breadcrumb">
        <li><a href="{{route('dashboard')}}"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Editar</li>
    </ol>

@stop
@section('content')
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
                <div class="box-header with-border">
                    <p><strong>Os campos com (*) são obrigatórios</strong></p>
                </div>

                <div class="box-body">
                    @if(isset($beneficio_cadastrado))
                        {{ Form::open([route('categoria.beneficios.atualizar', ['id' => $categoria_id, 'categoria_beneficio_id' => $categoria_beneficio_id])]) }}
                        @method('PUT')
                    @else
                        {{ Form::open(['route'=>['categoria.beneficios.incluir', request()->route('id')]]) }}
                    @endif
                    
                    @include('admin.sindicatos.categorias.beneficios.form')
                </div>

                {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@stop

@section('js')
    <script src="{{ asset('js/jquery.mask.min.js') }}"></script>

    <script>
      $(document).ready(function(){
        $("#numero_parcelas,#quantidade_kit").mask('0000');
        $('#valor').mask('#.##0,00', {reverse: true});
      });
    </script>
@stop