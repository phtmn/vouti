@extends('admin.layouts.admin')

@section('cabecalho')
<div class="header pb-5 d-flex align-items-center"
    style="min-height: 350px;  background-size: cover; background-position: center top;">
    <span class="mask bg-gradient-dark	 opacity-8"></span>
    <div class="container-fluid d-flex align-items-center">
        <div class="row">
            <div class="col-lg-12 col-md-10">
                <h1 class="display-2 text-white"> <i class="fas fa-users-cog text-white"></i> Cabos Eleitorais</h1>
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
                    <a href="{{route('cabo_eleitoral.create')}}" class="btn btn-secondary text-default"><i class="fas fa-plus-circle"></i>
                        Cadastrar Cabo Eleitoral </a>
                </div>
                <div class="table-responsive">
                    <table class="table align-items-center table-flush">
                        <thead class="thead-light">
                            <tr>
                                <!-- <th scope="col" class="text-left">#</th> -->
                                <th scope="col" class="text-left">Cabo Eleitoral</th>
                                <th scope="col" class="text-left">CPF</th>
                                <th scope="col" class="text-left">Telefone</th>
                                <th scope="col" class="text-left">Nº de Eleitores</th>
                                <th scope="col" class="text-left"></th>
                                <th scope="col" class="text-left"></th>                              
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($data as $d)
                            <tr>
                               
                                <td class="table-user">
                                    <img src="{{ url($d->user->thumb) }}" class="avatar rounded-circle mr-3">
                                    <b> {{ $d->user->name }}</b>
                                </td>                                                            
                                <td>
                                    {{ $d->cpf }}
                                </td>
                                <td>
                                    {{ $d->telefone }}
								</td>
								<td>
                                    0
                                </td>                           
                                <td>
                                    <div class="media align-items-center">
                                        <div class="media-body">
                                            <a class="btn btn-warning text-white" href="{{route('cabo_eleitoral.edit',$d->id)}}">
                                            <i class="fas fa-edit"></i> Corrige</i></a>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div class="media align-items-center">
                                        <div class="media-body">
                                            <form action="{{ route('cabo_eleitoral.destroy', ['id' => $d->id]) }}"
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
                                cadastrou nenhum cabo eleitoral! <span></span></p>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@stop