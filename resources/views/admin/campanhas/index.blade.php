@extends('admin.layouts.admin')

@section('cabecalho')
<div class="header pb-5 d-flex align-items-center"
    style="min-height: 350px;  background-size: cover; background-position: center top;">
    <span class="mask bg-gradient-dark	 opacity-8"></span>
    <div class="container-fluid d-flex align-items-center">
        <div class="row">
            <div class="col-lg-12 col-md-10">
                <h1 class="display-2 text-white"> <i class="fab fa-buromobelexperte text-white"></i> Campanhas</h1>

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
                    <a href="{{route('campanha.create')}}"  class="btn btn-secondary "><i class="fas fa-plus-circle"></i>
                        Cadastrar  </a>
                </div>
                <div class="table-responsive">
                    <table class="table align-items-center table-flush">
                        <thead class="thead-light">
                            <tr>
                                <!-- <th scope="col" class="text-left">#</th> -->
                                <th scope="col" class="text-left">Ano</th>
                                <th scope="col" class="text-left">Turno</th>                                
                                <th scope="col"></th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($data as $d)
                            <tr>
                               
                                <td>
                                    {{$d->ano}}
                                </td>
                                <td>
                                    {{($d->turno == '1')?'1º Turno' : '2º Turno'}}
                                </td>
                             
                                <!-- <td class="table-actions"> -->
                                            <!-- <a class=" table-actions btn btn-warning text-white" href="{{route('campanha.edit',$d->id)}}">
                                            <i class="fas fa-edit"></i> Corrige</i></a>  


                                            <a class=" table-actions btn btn-danger text-white" href="{{route('campanha.edit',$d->id)}}">
                                            <i class="far fa-trash-alt"></i> Apaga</i></a>   -->


                                         



                                            <!-- <form action="{{ route('campanha.destroy', ['id' => $d->id]) }}"
                                                method="post">
                                                {{ csrf_field() }}
                                                {{ method_field('DELETE') }}
                                                
                                                <button type="submit" class="btn btn-danger text-white"><i class="far fa-trash-alt"></i> Apaga</button>
                                            </form> -->
                                    
                                <!-- </td> -->
                                <td class="table-actions">
                                            




                                <button  class="btn btn-danger text-white" href="{{route('campanha.edit',$d->id)}}"><i class="far fa-trash-alt"></i> Corrige</button>



                                            <form action="{{ route('campanha.destroy', ['id' => $d->id]) }}"
                                                method="post">
                                                {{ csrf_field() }}
                                                {{ method_field('DELETE') }}
                                                
                                                <button type="submit" class="btn btn-danger text-white"><i class="far fa-trash-alt"></i> Apaga</button>
                                            </form>

                                            <a class=" table-actions btn btn-warning text-white" href="{{route('campanha.edit',$d->id)}}">
                                            <i class="fas fa-edit"></i> Corrige</i></a>  
                                    
                                </td>
                            </tr>
                            @empty
                            <p class="text-warning font-weight-bold 900" style="text-indent: 25px;">Você ainda não
                                cadastrou nenhuma campanha! <span></span></p>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@stop