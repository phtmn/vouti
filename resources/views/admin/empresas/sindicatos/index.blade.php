@extends('admin.layouts.template.admin')

@section('content-header')
    <h1>
       Adicionar Sindicato a Empresa: {{ $empresa->razao_social }}
    </h1>
   
@stop

@section('content')

@include('messages.msg')

<div class="box box-primary">
    <div class="box-body">
        {{ Form::open(['route'=>['empresa.sindicatos.incluir', request()->route('id')]]) }}
                @include('admin.empresas.sindicatos.form')
        {!! Form::close() !!}
    </div>
</div>

<div class="box box-primary">
    <div class="box-header">
        <h3>Sindicatos dessa Empresa: {{ $empresa->razao_social }}</h3>
    </div>
    <div class="box-body">

        <table class="table table-bordered table-hover" id="table">
            <thead>
            <tr>
                <th>Sigla</th>
                <th>Candidato</th>
                <th>nº</th>
            </tr>
            </thead>
            <tbody>
            @forelse($categorias_cadastradas as $cc)
                <tr>
                    <td>{{$cc->sindicato()->sigla}}</td>
                    <td>{{$cc->nome}}</td>
                    <td><span class="label label-primary">{{$cc->valor_beneficio}}</span></td>
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
    <script src="{{ asset('js/empresa_categoria_sindicato.js') }}"></script>
@stop