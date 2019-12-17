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
						<li><a class="{{ (\Request::route()->getName() == 'dashboard.index') ? 'menu-active' : '' }}" 
									href="{{route('dashboard.index') }}">Dashboard</a></li>
						<li><a class="{{ (\Request::route()->getName() == 'eleitor.index') ? 'menu-active' : '' }} 
									  {{ (\Request::route()->getName() == 'eleitor.create') ? 'menu-active' : '' }}
									  {{ (\Request::route()->getName() == 'eleitor.edit') ? 'menu-active' : '' }}"
								    href="{{route('eleitor.index') }}">Eleitores</a></li>
						<li><a class="{{ (\Request::route()->getName() == 'candidato.index') ? 'menu-active' : '' }} 
									  {{ (\Request::route()->getName() == 'candidato.create') ? 'menu-active' : '' }}
									  {{ (\Request::route()->getName() == 'candidato.edit') ? 'menu-active' : '' }}"
								    href="{{route('candidato.index') }}">Perfil</a></li>
						
						<li><a class="{{ (\Request::route()->getName() == 'local_votacao.index') ? 'menu-active' : '' }}" 									 
									href="{{route('local_votacao.index') }}">Locais de Votação</a></li>								
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