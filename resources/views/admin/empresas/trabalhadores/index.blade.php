@extends('admin.layouts.template.admin')

@section('content-header')
 
@stop

@section('content')
    <h3></h3>

    @include('messages.msg')
<div class="box box-primary">
              <div class="box-header">
                  <a href="{{route('empresa.trabalhadores.incluir',request()->route('id'))}}" class="btn bg-orange btn-flat">Cadastrar Eleitor</a>
              </div>
                    <div class="box-body">
                        <table class="table table-bordered table-hover" id="table">
                            <thead>
                            <tr>
                                <th>Nome</th>
                                <th>CPF</th>
                                <th>Telefone</th>
                                <th>E-mail</th>
                                <th>Can</th>
                                <th></th>
                            </tr>
                            </thead>
                            <tbody>
                            @forelse($trabalhadores as $trabalhador)
                                <tr>
                                    <td><a href="{{route('trabalhadores.edit', $trabalhador->id)}}">{{$trabalhador->nome}}</a></td>
                                    <td>{{mask("###.###.###-##", $trabalhador->cpf)}}</td>
                                    <td>{{$trabalhador->telefone_1}}</td>
                                    <td>{{$trabalhador->email}}</td>
                                    <td>{{$trabalhador->categoriaSindicato()->nome}}</td>
                                    <td>
                                      
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
           $('#table').DataTable();
        });
    </script>

@stop