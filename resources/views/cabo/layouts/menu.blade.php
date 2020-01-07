<ul class="navbar-nav">
    <li class="nav-item ">
        <a class="{{ (\Request::route()->getName() == 'dashboard.index') ? 'nav-link active' : 'nav-link' }}" 
                    href="{{route('dashboard.index') }} ">
        <i class="fas fa-file-contract"></i> DASHBOARD
        </a>
    </li>
    <li class="nav-item">
        <a class="{{ (\Request::route()->getName() == 'campanha.index') ? 'nav-link active' : 'nav-link' }}
                  {{ (\Request::route()->getName() == 'campanha.create') ? 'nav-link active' : 'nav-link' }}
                  {{ (\Request::route()->getName() == 'campanha.edit') ? 'nav-link active' : 'nav-link' }}  
                  " href="{{route('campanha.index') }}"> 
        <i class="fas fa-id-badge"></i> PERFIL
        </a>
    </li>
    <li class="nav-item">
        <a class="{{ (\Request::route()->getName() == 'local_votacao.index') ? 'nav-link active' : 'nav-link' }}
                  {{ (\Request::route()->getName() == 'local_votacao.create') ? 'nav-link active' : 'nav-link' }}
                  {{ (\Request::route()->getName() == 'local_votacao.edit') ? 'nav-link active' : 'nav-link' }}" 
                  href="{{route('local_votacao.index') }}">  
                  <i class="fas fa-map-signs"></i>LOCAIS DE VOTAÇÃO
        </a>
    </li>
    <li class="nav-item">
     <a class="{{ (\Request::route()->getName() == 'eleitor.index') ? 'nav-link active' : 'nav-link' }}
               {{ (\Request::route()->getName() == 'eleitor.create') ? 'nav-link active' : 'nav-link' }}
               {{ (\Request::route()->getName() == 'eleitor.edit') ? 'nav-link active' : 'nav-link' }}" 
               href="{{route('eleitor.index') }}"> 
     <i class="fas fa-address-card"></i> ELEITORES
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