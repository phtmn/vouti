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

<div class="whole-wrap">
    <div class="container">
        <div class="button-group-area">
            <a href="{{route('campanha.index')}}" class="genric-btn primary">Voltar</a>
        </div>
        <div class="section-top-border">
            <div class="row">
                <div class="col-lg-4 col-md-4">
                </div>
                <div class="col-lg-4 col-md-4">
                    <form action="#">
                        <div class="mt-10">
                            <input type="text" name="first_name" placeholder="Ano" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Ano'" required class="single-input" maxlength="4">
                        </div>
                        <div class="default-select mt-10" id="default-select">
                            <select>
                                <option value="0">Turno</option>
                                <option value="1">1º Turno</option>
                                <option value="2">2º Turno</option>
                            </select>
                        </div>
                        <div class="button-group-area text-center">
                            <a href="{{route('campanha.index')}}" class="genric-btn primary-border "><i class="fa fa-save"></i> Salvar</a>
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