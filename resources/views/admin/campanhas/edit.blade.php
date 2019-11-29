@extends('admin.layouts.template.admin')

@section('content-header')
<section class="relative about-banner" id="home">
    <div class="overlay overlay-bg"></div>
    <div class="container">
        <div class="row d-flex align-items-center justify-content-center">
            <div class="about-content col-lg-12">
                <h1 class="text-white">
                    {{ Auth::user()->name }}
                </h1>
                <p class="text-white link-nav">Campanhas <span class="lnr lnr-arrow-right"></span> <b class="text-white"> Cadastrar Campanha </b></p>
            </div>
        </div>
    </div>
</section>

@stop
@section('content')

@if ($errors->any())
<div class="row">
    <div class="alert alert-danger alert-dismissible">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
</div>
@endif

<div class="whole-wrap">
    <div class="container">
        <div class="button-group-area">
            <a href="{{route('campanha.index')}}" class="primary-btn  mt-4"> <i class="fa fa-arrow-left"></i> Voltar</a>
        </div>
        <div class="section-top-border">
            <div class="row">
                <div class="col-lg-4 col-md-4">
                </div>
                <div class="col-lg-4 col-md-4">
                    <form action="{{route('campanha.update', [ 'id' => $campanha->id ])}}" method="POST">
                        @csrf
                        {{ method_field('PUT') }}
                        <div class="mt-10">
                            <input type="text" name="ano" value="{{$campanha->ano}}" placeholder="Ano" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Ano'" required class="single-input" maxlength="4">
                        </div>
                        <div class="default-select mt-10" id="default-select">
                            <select name="turno" class="single-input" required>
                                <option value=""> Turno </option>
                                <option value="1" {{ $campanha->turno == 1 ? 'selected' : '' }}>1º Turno</option>
                                <option value="2" {{ $campanha->turno == 2 ? 'selected' : '' }}>2º Turno</option>
                            </select>
                        </div>
                        <div class="button-group-area text-center">
                            <button type="submit" class="primary-btn  mt-4 primary-border"><i class="fa fa-save"></i> Salvar</button>
                        </div>
                    </form>
                    </form>
                </div>
                <div class="col-lg-4 col-md-4">
                </div>
            </div>
        </div>
    </div>
</div>
@stop