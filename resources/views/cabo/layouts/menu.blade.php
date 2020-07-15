<ul class="navbar-nav">
    <li class="nav-item ">
        <a class="{{ (\Request::route()->getName() == 'dashboard.index') ? 'nav-link active' : 'nav-link' }}" 
                    href="{{route('dashboard.index') }} ">
        <i class="fas fa-file-contract"></i> Dashboard
        </a>
    </li>
    <li class="nav-item">
        <a class="{{ (\Request::route()->getName() == 'perfil.index') ? 'nav-link active' : 'nav-link' }}                    
                  " href="{{route('perfil.index') }}"> 
        <i class="fas fa-id-badge"></i> Perfil
        </a>
    </li>
    <li class="nav-item">
        <a class="{{ (\Request::route()->getName() == 'local_votacao.index') ? 'nav-link active' : 'nav-link' }}
                  {{ (\Request::route()->getName() == 'local_votacao.create') ? 'nav-link active' : 'nav-link' }}
                  {{ (\Request::route()->getName() == 'local_votacao.edit') ? 'nav-link active' : 'nav-link' }}" 
                  href="{{route('local_votacao.index') }}">  
                  <i class="fas fa-map-signs"></i>Locais de Votação
        </a>
    </li>
    <li class="nav-item">
     <a class="{{ (\Request::route()->getName() == 'eleitor.index') ? 'nav-link active' : 'nav-link' }}
               {{ (\Request::route()->getName() == 'eleitor.create') ? 'nav-link active' : 'nav-link' }}
               {{ (\Request::route()->getName() == 'eleitor.edit') ? 'nav-link active' : 'nav-link' }}" 
               href="{{route('eleitor.index') }}"> 
     <i class="fas fa-address-card"></i> Eleitores
        </a>
    </li>     
</ul>
<hr class="my-3">
<ul class="navbar-nav">    
    <li class="nav-item">
        <a href="{{route('cabo.logout')}}" class="nav-link" onclick="event.preventDefault(); 
        document.getElementById('logout-form').submit();">
            <i class="ni ni-user-run text-danger"></i> Sair
        </a>
        <form id="logout-form" action="{{ route('cabo.logout') }}" method="POST" style="display: none;">
            @csrf
        </form>
    </li>
</ul>