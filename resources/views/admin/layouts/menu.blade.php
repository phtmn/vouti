<ul class="navbar-nav">
    <li class="nav-item ">
        <a class="{{ (\Request::route()->getName() == 'dashboard') ? 'nav-link active' : 'nav-link' }}" href="{{route('dashboard') }} ">
        <i class="fas fa-file-contract"></i> DASHBOARD
        </a>
    </li>
    <li class="nav-item">
        <a class="{{ (\Request::route()->getName() == 'campanha.index') ? 'nav-link active' : 'nav-link' }}
                  {{ (\Request::route()->getName() == 'campanha.create') ? 'nav-link active' : 'nav-link' }}
                  {{ (\Request::route()->getName() == 'campanha.edit') ? 'nav-link active' : 'nav-link' }}  
                  " href="{{route('campanha.index') }}"> 
        <i class="fab fa-buromobelexperte"></i> CAMPANHAS
        </a>
    </li>
    <li class="nav-item">
     <a class="{{ (\Request::route()->getName() == 'candidato.index') ? 'nav-link active' : 'nav-link' }}
               {{ (\Request::route()->getName() == 'candidato.create') ? 'nav-link active' : 'nav-link' }}
               {{ (\Request::route()->getName() == 'candidato.edit') ? 'nav-link active' : 'nav-link' }}" 
               href="{{route('candidato.index') }}"> 
     <i class="fas fa-id-card"></i> CANDIDATOS
        </a>
    </li>     
    <li class="nav-item">
        <a class="{{ (\Request::route()->getName() == 'cabo_eleitoral.index') ? 'nav-link active' : 'nav-link' }}
                  {{ (\Request::route()->getName() == 'cabo_eleitoral.create') ? 'nav-link active' : 'nav-link' }}
                  {{ (\Request::route()->getName() == 'cabo_eleitoral.edit') ? 'nav-link active' : 'nav-link' }}" 
                  href="{{route('cabo_eleitoral.index') }}">  
        <i class="fas fa-chalkboard-teacher"></i> CABOS ELEITORAIS
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