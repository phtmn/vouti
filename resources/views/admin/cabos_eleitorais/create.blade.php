@extends('admin.layouts.admin')

@section('cabecalho')
<div class="header pb-5 d-flex align-items-center"
    style="min-height: 350px;  background-size: cover; background-position: center top;">
    <span class="mask bg-gradient-dark	 opacity-8"></span>
    <div class="container-fluid d-flex align-items-center">
        <div class="row">
            <div class="col-lg-12 col-md-10">
                <h1 class="display-2 text-white"> <i class="fas fa-chalkboard-teacher text-white"></i> Cabos Eleitorais</h1>
            </div>
        </div>
    </div>
</div>
@stop

@section('conteudo')

<div class="container-mt--7">
    <div class="col-md-12">
        <div class="card shadow">
            <div class="card-body bg-transparent">
            <form action="{{route('cabo_eleitoral.store')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                    <p class="text-success mt-2 font-weight-bold">Dados Gerais</p>
                    <hr>
                    <div class="form-group row">
                        <label for="" class="col-sm-3 col-form-label text-right">Imagem </label>
                        <div class="col-md-5 mt-1">
                        <input type="file" name="image" placeholder="Foto" required class="form-control" >
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="" class="col-sm-3 col-form-label text-right">Nome  </label>
                        <div class="col-md-5 mt-1">
                            <input type="text" name="name" required class="form-control" >
                        </div>
                    </div>                    
                    <div class="form-group row">
                        <label for="" class="col-sm-3 col-form-label text-right">CPF </label>
                        <div class="col-md-2 mt-1">
                            <input type="text" name="cpf" required class="form-control" >
                        </div>
                    </div>                    
                    <div class="form-group row">
                        <label for="" class="col-sm-3 col-form-label text-right">Telefone </label>
                        <div class="col-md-3 mt-1">
                            <input type="text" name="telefone" required class="form-control" >
                        </div>
                    </div>  
                    <label> Acesso ao Sistema </label>
                    <div class="form-group row">
                        <label for="" class="col-sm-3 col-form-label text-right">E-mail </label>
                        <div class="col-md-5 mt-1">                        
                            <input type="text" name="email" required class="form-control"required >
                        </div>
                    </div>  
                    <div class="form-group row">
                        <label for="" class="col-sm-3 col-form-label text-right">Senha </label>
                        <div class="col-md-3 mt-1">
                        <input type="password" name="password" required class="form-control"required >
                        </div>
                    </div>  
                    <div class="form-group row">
                        <label for="" class="col-sm-3 col-form-label text-right">Repetir Senha </label>
                        <div class="col-md-3 mt-1">
                            <input type="password" name="repetir_senha" required class="form-control" >
                        </div>
                    </div>                      
                    
                    <div class="card-footer text-center">
                    <a class="btn btn-outline-success" href="{{route('cabo_eleitoral.index')}} "><i class="ni ni-bold-left"></i> Retorna </a>
                    <!-- <button type="submit" class="btn btn-success"><i class="ni ni-bold-left"></i>
                            Retorna</button> -->
                        <button type="submit" class="btn btn-success"><i class="ni ni-check-bold"></i>
                            Confirma</button>
                    </div>
                </form>
            </div>
        </div>
    </div>


<div class="whole-wrap">
    <div class="container">
        <div class="button-group-area">
            <a href="{{route('cabo_eleitoral.index')}}" class="primary-btn  mt-4"><i class="fa fa-arrow-left"></i> Voltar</a>
        </div>
        <div class="section-top-border">
            <div class="row">
                <div class="col-lg-4 col-md-4">
                </div>
                <div class="col-lg-4 col-md-4">
                    <form action="{{route('cabo_eleitoral.store')}}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <div class="mt-10">
                        <label> Foto do cabo eleitoral </label>
                            <input type="file" name="image" placeholder="Foto" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Foto'" required class="single-input" >
                        </div>
                        <div class="mt-10">
                            <input type="text" name="name" placeholder="Nome Completo" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Nome Completo'" required class="single-input" >
                        </div>
                        <div class="mt-10">
                            <input type="text" name="cpf" placeholder="CPF" onfocus="this.placeholder = ''" onblur="this.placeholder = 'CPF'" required class="single-input" >
                        </div>
                        <div class="mt-10">
                            <input type="text" name="telefone" placeholder="Telefone" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Telefone'" required class="single-input" >
                        </div>

                        <div class="mt-10">
                        <label> Acesso ao Sistema </label>
                            <input type="text" name="email" placeholder="E-mail" onfocus="this.placeholder = ''" onblur="this.placeholder = 'E-mail'" required class="single-input" >
                        </div>
                        <div class="mt-10">
                            <input type="password" name="password" placeholder="Senha" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Senha'" required class="single-input" >
                        </div>
                        <div class="mt-10">
                            <input type="password" name="repetir_senha" placeholder="Repetir Senha" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Repetir Senha'" required class="single-input" >
                        </div>
                        <!-- <div class="default-select mt-10" id="default-select">
                            <select>
                                <option value="0">Cargo</option>
                                <option value="1">Vereador</option>
                                <option value="2">Deputado Estadual</option>
                                <option value="3">Prefeito</option>
                                <option value="4">Deputado Federal</option>
                                <option value="5">Governador</option>
                                <option value="6">Senador</option>
                                <option value="7">Presidente</option>
                            </select>
                        </div> -->
                        <div class="button-group-area text-center">
                        <button type="submit" class="primary-btn  mt-4 primary-border"><i class="fa fa-save"></i> Salvar</button>
                        </div>
                    </form>
                </div>
                <div class="col-lg-4 col-md-4">
                </div>
            </div>
        </div>
    </div>
</div>
@stop

