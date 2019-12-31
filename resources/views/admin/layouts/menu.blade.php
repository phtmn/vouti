<ul class="navbar-nav">
    <li class="nav-item ">
        <a class="{{ (\Request::route()->getName() == 'dashboard') ? 'nav-link active' : 'nav-link' }}" href="{{route('dashboard') }} ">
        <i class="fas fa-file-contract"></i> DASHBOARD
        </a>
    </li>
    <li class="nav-item">
        <a class="{{ (\Request::route()->getName() == 'campanha.index') ? 'nav-link active' : 'nav-link' }}" href="{{route('campanha.index') }}"> 
        <i class="fab fa-buromobelexperte"></i> CAMPANHAS
        </a>
    </li>
    <li class="nav-item">
     <a class="{{ (\Request::route()->getName() == 'candidato.index') ? 'nav-link active' : 'nav-link' }}" href="{{route('candidato.index') }}"> 
            <i class="fas fa-user-friends text-default"></i> CANDIDATOS
        </a>
    </li>     
    <li class="nav-item">
        <a class="{{ (\Request::route()->getName() == 'cabo_eleitoral.index') ? 'nav-link active' : 'nav-link' }}" href="{{route('cabo_eleitoral.index') }}">  
            <i class="fas fa-users-cog text-default" ></i> CABOS ELEITORAIS
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{route('local_votacao.index') }}">  
            <i class="fas fa-landmark text-default" ></i> LOCAIS DE VOTAÇÃO
        </a>
    </li>
</ul>
<hr class="my-3">
<ul class="navbar-nav">    
    <li class="nav-item">
        <a href="{{route('logout')}}" class="nav-link" onclick="event.preventDefault(); 
        document.getElementById('logout-form').submit();">
            <i class="ni ni-user-run text-danger"></i> SAIR
        </a>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
        </form>
    </li>
</ul>