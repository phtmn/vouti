@extends('admin.layouts.template.admin')

@section('content-header')
    <h1>
       <!-- Cab Cadastradas -->
    </h1>


@stop

@section('content')

@include('messages.msg')

<div class="box box-primary">
              <div class="box-header">
                  <a href="{{route('empresas.create')}}" class="btn bg-orange btn-flat">Cadastrar Cabo Eleitoral</a>
              </div>
                    <div class="box-body">

                        <table class="table table-bordered table-hover" id="table">
                            <thead>
                            <tr>
                                <th>Nome </th>
                                <th>Fantasia</th>
                                <th>CPF</th>
                                <th>nº Eleitores</th>
                                <th>Telefone</th> 
                                <th></th>
                            </tr>
                            </thead>
                            <tbody>
                            @forelse($data as $d)
                                <tr>                               
                                    <td><a href="{{ route('empresas.edit',$d->id) }}">{{$d->razao_social}}</a></td>
                                    <td>{{$d->nome_fantasia}}</td>
                                    <td>{{mask('##.###.###/####-##',$d->cnpj)}}</td>
                                    <td><span class="badge bg-purple-gradient   ">{{$d->trabalhadores()->count()}}</span></td>
                                    <td>{{$d->telefone_1}}</td>
                                    <td>
                                        <a href="{{route('empresa.sindicatos.listar', $d->id)}}" class="btn btn-xs bg-purple btn-flat">
                                            <i class="fa fa-list" style="padding-right: 4px;"></i>Vincular Candidatos</a>
                                        <a href="{{route('empresa.trabalhadores.listar',$d->id)}}" class="btn btn-xs bg-orange btn-flat">
                                            <i class="fa fa-list" style="padding-right: 4px;"></i>Eleitores</a>
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