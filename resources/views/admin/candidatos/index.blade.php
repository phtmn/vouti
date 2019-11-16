@extends('admin.layouts.template.admin')

@section('content-header')
    <h1>
       CANDIDATOS
    </h1>

@stop

@section('content')

@include('messages.msg')

<div class="box box-primary">
              <div class="box-header">
                  {{--{<a href="{{route('sindicatos.create')}}" class="btn bg-orange btn-flat">Cadastrar Campanha</a> --}}
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