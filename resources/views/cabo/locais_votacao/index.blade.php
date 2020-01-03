@extends('cabo.layouts.cabo')

@section('cabecalho')
<div class="header pb-5 d-flex align-items-center" style="min-height: 350px;  background-size: cover; background-position: center top;">
    <span class="mask bg-gradient-dark	 opacity-8"></span>
    <div class="container-fluid d-flex align-items-center">
        <div class="row">
            <div class="col-lg-12 col-md-10">
                <h1 class="display-2 text-white"> <i class="fas fa-map-signs text-white"></i> Locais de Votação</h1>
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
                    <a href="{{route('local_votacao.create')}}"  class="btn btn-secondary "><i class="fas fa-plus-circle"></i>
                        Cadastrar </a>
                </div>
                <div class="table-responsive">
                    <table class="table align-items-center table-flush">
                        <thead class="thead-light">
                            <tr>
                               
                                <th scope="col" class="text-left">Local</th>
                                <th scope="col" class="text-left">Zona</th>                                
                                <th scope="col" class="text-left"></th>
                                <th scope="col" class="text-left"></th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($data as $d)
                            <tr>
                            <td >
								{{ $d->local }}
                                </td>                                
                                <td>
									{{ $d->zona }}
                                </td>                                
                                <td>
                                    <div class="media align-items-center">
                                    <div class="media-body">
                                            <a class="btn btn-warning text-white" href="{{route('local_votacao.edit',$d->id)}}">
                                            <i class="fas fa-edit"></i> Corrige</i></a>
                                        </div>                                       
                                    </div>
                                </td>
                                <td>
                                    <div class="media align-items-center">
                                        <div class="media-body">											
                                            <form action="{{ route('local_votacao.destroy', ['id' => $d->id]) }}"
                                                method="post">
                                                {{ csrf_field() }}
                                                {{ method_field('DELETE') }}
                                                <button type="submit" class="btn btn-danger text-white"><i class="far fa-trash-alt"></i> Apaga</button>
                                            </form>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            @empty
                            <p class="text-warning font-weight-bold 900" style="text-indent: 25px;">Você ainda não
                                cadastrou nenhum local de votação! <span></span></p>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

@stop
