@extends('admin.layouts.template.admin')

@section('content-header')
    <h1>
       Partido: {{$sindicato->razao_social}}
    </h1>
    

@stop

@section('content')

    @include('messages.msg')

    <div class="box box-primary">
        <div class="box-header">
            <a href="{{route('sindicato.categorias.incluir', request()->route('id'))}}" class="btn bg-orange btn-flat">Cadastrar Candidato </a>
        </div>
        <div class="box-body">

            <table class="table table-bordered table-hover" id="table">
                <thead>
                <tr>
                    <th>CCT</th>
                    <th>Nome</th>
                    <th>Nº</th>  
                    <th>Cargo</th>                  
                    <th></th>
                </tr>
                </thead>
                <tbody>
                @forelse($data as $d)
                    <tr>
                        <td><a href="{{$d->cct}}" target="_blank">{{$d->cct}}</a></td>
                        <td>{{$d->nome}}</td>
                        
                        <td>R$ {{$d->valor_beneficio}}</td>
                        <td>{{$d->nome}}</td>
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
        $(function(){
            $('#table').dataTable();
        })
    </script>


    @stop