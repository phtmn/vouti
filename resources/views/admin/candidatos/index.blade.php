@extends('admin.layouts.admin')

@section('cabecalho')
<div class="header pb-5 d-flex align-items-center"
    style="min-height: 350px;  background-size: cover; background-position: center top;">
    <span class="mask bg-gradient-dark	 opacity-8"></span>
    <div class="container-fluid d-flex align-items-center">
        <div class="row">
            <div class="col-lg-12 col-md-10">
                <h1 class="display-2 text-white"> <i class="fas fa-user-friends text-white"></i> Candidatos</h1>
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
                    <a href="{{route('candidato.create')}}" class="btn btn-success "><i class="ni ni-fat-add"></i>
                        Cadastrar Candidato </a>
                </div>
                <div class="table-responsive">
                    <table class="table align-items-center table-flush">
                        <thead class="thead-light">
                            <tr>
                                <th scope="col" class="text-left">#</th>
                                <th scope="col" class="text-left">Candidato</th>
                                <th scope="col" class="text-left">Nº</th>
                                <th scope="col" class="text-left">Cargo</th>
                                <th scope="col" class="text-left">-</th>
                                <th scope="col" class="text-left">-</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($data as $d)
                            <tr>
                                <td>
                                    {{$d->id}}
                                </td>
                                <td>
                                    {{$d->nome_completo}}
                                </td>
                                <td>
                                    {{$d->numero}}
                                </td>
                                <td>
                                    @if (($d->cargo) == "1")
                                    <b> Vereador </b>
                                    @elseif (($d->cargo) == "2")
                                    <b> Deputado Estadual </b>
                                    @elseif (($d->cargo) == "3")
                                    <b> Prefeito </b>
                                    @elseif (($d->cargo) == "4")
                                    <b> Deputado Federal </b>
                                    @elseif (($d->cargo) == "5")
                                    <b> Governador </b>
                                    @elseif (($d->cargo) == "6")
                                    <b> Senador </b>
                                    @elseif (($d->cargo) == "7")
                                    <b> Presidente </b>
                                    @endif
                                </td>
                                <td>
                                    <div class="media align-items-center">
                                        <div class="media-body">
                                            <a class="text-success" href="{{route('candidato.edit',$d->id)}}">
                                                Editar</i></a>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div class="media align-items-center">
                                        <div class="media-body">
                                            <form action="{{ route('candidato.destroy', ['id' => $d->id]) }}"
                                                method="post">
                                                {{ csrf_field() }}
                                                {{ method_field('DELETE') }}

                                                <button type="submit" class="btn btn-danger">Apagar</button>
                                            </form>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            @empty
                            <p class="text-warning font-weight-bold 900" style="text-indent: 25px;">Você ainda não
                                cadastrou nenhum candidato! <span></span></p>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@stop