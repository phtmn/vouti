@extends('cabo.layouts.cabo')

@section('cabecalho')
<div class="header pb-5 d-flex align-items-center"
    style="min-height: 350px;  background-size: cover; background-position: center top;">
    <span class="mask bg-gradient-dark	 opacity-8"></span>
    <div class="container-fluid d-flex align-items-center">
        <div class="row">
            <div class="col-lg-12 col-md-10">
                <h1 class="display-2 text-white"> <i class="fas fa-address-card text-white"></i> Eleitores</h1>
            </div>
        </div>
    </div>
</div>
@stop

@section('conteudo')

<div class="container mt--7">
    <div class="row">
        <div class="col-md-12">
            <div class="card shadow">
                <div class="card-header border-0">
                    <a href="{{route('eleitor.create')}}" class="btn btn-secondary "><i class="fas fa-plus-circle"></i>
                        Cadastrar </a>
                </div>
                <div class="table-responsive py-4">
                    <table class="table align-items-center table-flush">
                        <thead class="thead-light">
                            <tr>
                                <th scope="col" class="text-left"></th>
                                <th scope="col" class="text-left">Nome</th>
                                <th scope="col" class="text-left">CPF</th>
                                <th scope="col" class="text-left"></th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($data as $d)
                            <tr>
                                <td>
                                </td>
                                <td class="table-user">
                                    <b> {{$d->nome}} </b>
                                </td>
                                <td>
                                
                                </td>
                                <td class="text-right">  
                                    <form action="{{ route('eleitor.destroy', ['id' => $d->id]) }}" method="post">
                                        {{ csrf_field() }}
                                        {{ method_field('DELETE') }}
                                        <a class="btn btn-warning text-white" href="{{route('eleitor.edit',$d->id)}}">
                                            <i class="fas fa-edit"></i> Corrige</i></a>
                                        <button type="submit" class="btn btn-danger text-white"><i
                                                class="far fa-trash-alt"></i> Apaga</button>
                                    </form>
                                </td>
                            </tr>
                            @empty
                            <p class="text-warning font-weight-bold 900" style="text-indent: 25px;">Você ainda não
                                cadastrou nenhum eleitor! <span></span></p>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>


@stop