<!DOCTYPE html>
<html lang="zxx" class="no-js">

<head>
	<header id="header">
		<div class="container main-menu">
			<div class="row align-items-center justify-content-between d-flex">
				<div id="logo">
					<a href="index.html"><img src="{{ asset('site/img/logo.png') }} " alt="" title="" /></a>
				</div>
				<nav id="nav-menu-container">
					<ul class="nav-menu">
						<li><a class="{{ (\Request::route()->getName() == 'dashboard') ? 'menu-active' : '' }}" 
									href="{{route('dashboard') }}">Dashboard</a></li>
						<li><a class="{{ (\Request::route()->getName() == 'campanha.index') ? 'menu-active' : '' }} 
									  {{ (\Request::route()->getName() == 'campanha.create') ? 'menu-active' : '' }}
									  {{ (\Request::route()->getName() == 'campanha.edit') ? 'menu-active' : '' }}"
								    href="{{route('campanha.index') }}">Campanhas</a></li>
						<li><a class="{{ (\Request::route()->getName() == 'candidato.index') ? 'menu-active' : '' }} 
									  {{ (\Request::route()->getName() == 'candidato.create') ? 'menu-active' : '' }}
									  {{ (\Request::route()->getName() == 'candidato.edit') ? 'menu-active' : '' }}"
								    href="{{route('candidato.index') }}">Candidatos</a></li>
						<li><a class="{{ (\Request::route()->getName() == 'cabo_eleitoral.index') ? 'menu-active' : '' }} 
									  {{ (\Request::route()->getName() == 'cabo_eleitoral.create') ? 'menu-active' : '' }}
									  {{ (\Request::route()->getName() == 'cabo_eleitoral.edit') ? 'menu-active' : '' }}"
									href="{{route('cabo_eleitoral.index') }}">Cabos Eleitorais</a></li>
						<li><a href="#">Locais de Votação</a></li>
						<li><a href="{{ route('logout') }}" onclick="event.preventDefault();
							document.getElementById('logout-form').submit();">Sair </a>
								<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
									{{ csrf_field() }}
								</form>					
						</li>
					</ul>
				</nav>
			</div>
		</div>
	</header>