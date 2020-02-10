@extends('site.master')

@section('content')

			
<div class=" mt-80 ">
<!--<img src="{{asset('/images/linha2.png')}}" alt="" title=""  style="width:100%" /></a> -->
    <nav class="navbar navbar-expand-lg navbar-light  " >
        <div class="container main-menu ">
            <a class="navbar-brand text-dark" href="#">  </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse " id="navbarNav">
               <ul class="nav-menu justify-content-center ml-auto text-center">                    
                    <!-- Assessor -->
                    @can('empresa')
                        <li class="nav-item active"><a class="nav-link text-dark" href="#">Trabalhadores <span class="sr-only">(current)</span></a></li>
                        <li class="nav-item active"><a class="nav-link text-dark" href="#"> Ocorrências<span class="sr-only">(current)</span></a></li>
                        <li class="nav-item active"><a class="nav-link text-dark" href="#">Banco de Vagas/currículos<span class="sr-only">(current)</span></a></li>
                    @endcan()
                    <!-- Candidato -->
                    @can('empresa_parceira')
                        <li class="nav-item active"><a class="nav-link text-dark" href="">Perfil <span class="sr-only">(current)</span></a></li>
                    @endcan()                   
                </ul> 
            </div>
    </div>
	
    </nav>
	<img src="{{asset('/images/linha2.png')}}" alt="" title=""  style="width:100%" /></a>
    <div class="container mt-20">
	
        @yield('painel')    
    
    </div>
    
</div>


@endsection