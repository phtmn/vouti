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
				<p class="text-white link-nav"><b class="text-white"> Dashboard </b></p>
			</div>
		</div>
	</div>
</section>

@stop

@section('content')

<section class="home-about-area section-gap">
				<div class="container">
					<div class="row align-items-center justify-content-between">
						<div class="col-lg-6 col-md-6 home-about-left">							
							<img class="img-fluid" src="{{ asset('site/img/about-img.png') }}" alt="">							
						</div>
						<div class="col-lg-5 col-md-6 home-about-right">
							<h6>Informações do Partido</h6>
							<h1 class="text-uppercase">NOME</h1>
							<p>
								SIGLA .. Numero da legenda..Nome do Presidente  site focus on a range of items and features that we use in life without giving them a second thought. such as Coca Cola. Dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.
							</p>
							<a href="#" class="primary-btn text-uppercase">Termo de Uso</a>
						</div>						
					</div>				
				</div>	
			</section>



			
<div class="whole-wrap">
	<div class="container">
		<div class="section-top-border ">
			<!-- <h3 class="mb-30">Left Aligned</h3> -->
			<div class="row">
				<div class="col-md-3">
				<div class="single-services">
								<span class="lnr lnr-pie-chart"></span>
								<a href="#"><h4>Campanhas</h4></a>
								<!-- <p>
									“It is not because things are difficult that we do not dare; it is because we do not dare that they are difficult.”
								</p> -->
							</div>
				</div>
				<div class="col-md-3">
				<div class="single-services">
								<span class="lnr lnr-pie-chart"></span>
								<a href="#"><h4>Candidatos</h4></a>
								<!-- <p>
									“It is not because things are difficult that we do not dare; it is because we do not dare that they are difficult.”
								</p> -->
							</div>
				</div>
				<div class="col-md-3">
				<div class="single-services">
								<span class="lnr lnr-pie-chart"></span>
								<a href="#"><h4>Cabos Eleitorais</h4></a>
								<!-- <p>
									“It is not because things are difficult that we do not dare; it is because we do not dare that they are difficult.”
								</p> -->
							</div>
				</div>
				<div class="col-md-3">
				<div class="single-services">
								<span class="lnr lnr-pie-chart"></span>
								<a href="#"><h4>Locais de Votação</h4></a>
								<!-- <p>
									“It is not because things are difficult that we do not dare; it is because we do not dare that they are difficult.”
								</p> -->
							</div>
				</div>
			</div>
		</div>

		<section class="timeline pb-120">
            <div class="text-center">
                <div class="menu-content pb-70">
                    <div class="title text-center">
                        <h1 class="mb-10">Campanhas (Ajustar 1º turno na esquerda e 2º na direita))</h1>
                        <!-- <p>Who are in extremely love with eco friendly system.</p> -->
                    </div>
                </div>
            </div>				
			  <ul>
			    <li>
			      <div class="content">
			        <h4>
			          <time>SIGLA</time>
			        </h4>
					<p><b>Ano:</b> 2020</p>
					<p><b>Turno:</b> 1º Turno</p>
					<p><b>Candidatos:</b> 10</p>
					<p><b>Cabos Eleitorais:</b> 59</p>
			        <p><b>Eleitores:</b> 1232</p>
			      </div>
			    </li>
			    <li>
			      <div class="content">			      	
				  <h4>
			          <time>SIGLA</time>
			        </h4>
					<p><b>Ano:</b> 2020</p>
					<p><b>Turno:</b> 1º Turno</p>
					<p><b>Candidatos:</b> 10</p>
					<p><b>Cabos Eleitorais:</b> 59</p>
			        <p><b>Eleitores:</b> 1232</p>
			      </div>
			    </li>			  			   			    
			  </ul>
			</section>	
	
		<section class="testimonial-area section-gap">
		        <div class="container">
		            <div class="row d-flex justify-content-center">
		                <div class="menu-content pb-70 col-lg-8">
		                    <div class="title text-center">
		                        <h1 class="mb-10">Candidatos  (deixar igual a do template)</h1>
		                        <!-- <p>It is very easy to start smoking but it is an uphill task to quit it. Ask any chain smoker or even a person.</p> -->
		                    </div>
		                </div>
		            </div>
		            <div class="row">
		                <div class="active-testimonial">
		                    <div class="single-testimonial item d-flex flex-row">
		                        <div class="thumb">
		                            <img class="img-fluid" src="{{ asset('site/img/elements/user1.png') }} " alt="">
		                        </div>
		                        <div class="desc">
		                            <p>
		                                Endereço
		                            </p>
		                            <h4>NOME</h4>
		                            <p>Nº - cargo</p>
		                        </div>
		                    </div>
		                    <div class="single-testimonial item d-flex flex-row">
		                        <div class="thumb">
		                            <img class="img-fluid" src="{{ asset('site/img/elements/user2.png') }}" alt="">
		                        </div>
		                        <div class="desc">
		                            <p>
		                                A purpose is the eternal condition for success. Every former smoker can tell you just how hard it is to stop smoking cigarettes. However.
		                            </p>
		                            <h4>Carolyn Craig</h4>
		                            <p>CEO at Facebook</p>
		                        </div>
		                    </div>
		                </div>
		            </div>
		        </div>
		    </section>
		
		<div class="section-top-border">
			<h3 class="mb-30">Cabos Eleitorais</h3>
			<div class="progress-table-wrap">
				<div class="progress-table">
					<div class="table-head">
						<div class="serial">#</div>
						<div class="country">Countries</div>
						<div class="visit">Visits</div>
						<div class="percentage">Percentages</div>
					</div>
					<div class="table-row">
						<div class="serial">01</div>
						<div class="country"> <img src="{{ asset('site/img/elements/f1.jpg') }}" alt="flag">Canada</div>
						<div class="visit">645032</div>
						<div class="percentage">
							<div class="progress">
								<div class="progress-bar color-1" role="progressbar" style="width: 80%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
							</div>
						</div>
					</div>
					<div class="table-row">
						<div class="serial">02</div>
						<div class="country"> <img src="{{ asset('site/img/elements/f2.jpg') }}" alt="flag">Canada</div>
						<div class="visit">645032</div>
						<div class="percentage">
							<div class="progress">
								<div class="progress-bar color-2" role="progressbar" style="width: 30%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
							</div>
						</div>
					</div>				
				</div>
			</div>
		</div>
		<div class="section-top-border">
			<h3>Cabos Eleitorais</h3>
			<div class="row gallery-item">
				<div class="col-md-4">
					<a href="{{ asset('site/img/elements/g1.jpg') }}" class="img-gal">
						<div class="single-gallery-image" style="background: url({{ asset('site/img/elements/g1.jpg') }});"></div>
					</a>
				</div>
				<div class="col-md-4">
					<a href="{{ asset('site/img/elements/g2.jpg') }}" class="img-gal">
						<div class="single-gallery-image" style="background: url({{ asset('site/img/elements/g2.jpg') }});"></div>
					</a>
				</div>
				<div class="col-md-4">
					<a href="{{ asset('site/img/elements/g3.jpg') }}" class="img-gal">
						<div class="single-gallery-image" style="background: url({{ asset('site/img/elements/g3.jpg') }});"></div>
					</a>
				</div>
				<div class="col-md-6">
					<a href="{{ asset('site/img/elements/g4.jpg') }}" class="img-gal">
						<div class="single-gallery-image" style="background: url({{ asset('site/img/elements/g4.jpg') }});"></div>
					</a>
				</div>
				<div class="col-md-6">
					<a href="{{ asset('site/img/elements/g5.jpg') }}" class="img-gal">
						<div class="single-gallery-image" style="background: url({{ asset('site/img/elements/g5.jpg') }});"></div>
					</a>
				</div>			
			</div>
		</div>
		<div class="section-top-border">
			<div class="row">
				<div class="col-md-4 typo-sec">
					<h3 class="mb-20">Locais de Votação</h3>
					<div class="typography">
						<h1 class="typo-list">This is header 01</h1>
						<h2 class="typo-list">This is header 02</h2>
						<h3 class="typo-list">This is header 03</h3>
						<h4 class="typo-list">This is header 04</h4>
						<h5 class="typo-list">This is header 01</h5>
						<h6 class="typo-list">This is header 01</h6>
					</div>
				</div>
				<div class="col-md-4 mt-sm-30 typo-sec">
					<h3 class="mb-20">Unordered List</h3>
					<div class="">
						<ul class="unordered-list">
							<li>Fta Keys</li>
							<li>For Women Only Your Computer Usage</li>
							<li>Facts Why Inkjet Printing Is Very Appealing
								<ul>
									<li>Addiction When Gambling Becomes
										<ul>
											<li>Protective Preventative Maintenance</li>
										</ul>
									</li>
								</ul>
							</li>
							<li>Dealing With Technical Support 10 Useful Tips</li>
							<li>Make Myspace Your Best Designed Space</li>
							<li>Cleaning And Organizing Your Computer</li>
						</ul>
					</div>
				</div>
				<div class="col-md-4 mt-sm-30 typo-sec">
					<h3 class="mb-20">Ordered List</h3>
					<div class="">
						<ol class="ordered-list">
							<li><span>Fta Keys</span></li>
							<li><span>For Women Only Your Computer Usage</span></li>
							<li><span>Facts Why Inkjet Printing Is Very Appealing</span>
								<ol class="ordered-list-alpha">
									<li><span>Addiction When Gambling Becomes</span>
										<ol class="ordered-list-roman">
											<li><span>Protective Preventative Maintenance</span></li>
										</ol>
									</li>
								</ol>
							</li>
							<li><span>Dealing With Technical Support 10 Useful Tips</span></li>
							<li><span>Make Myspace Your Best Designed Space</span></li>
							<li><span>Cleaning And Organizing Your Computer</span></li>
						</ol>
					</div>
				</div>
			</div>
		</div>		
	</div>
</div>
<section class="facts-area section-gap" id="facts-area">
				<div class="container">				
					<div class="row">
						<div class="col-lg-1 col-md-6 single-fact">
							<!-- <h1 class="counter">2536</h1>
							<p>Campanhas</p> -->
						</div>
						<div class="col-lg-2 col-md-6 single-fact">
							<h1 class="counter">2536</h1>
							<p>Campanhas</p>
						</div>
						<div class="col-lg-2 col-md-6 single-fact">
							<h1 class="counter">6784</h1>
							<p>Candidatos</p>
						</div>
						<div class="col-lg-2 col-md-6 single-fact">
							<h1 class="counter">2239</h1>
							<p>Cabos Eleitorais</p>
						</div>	
						<div class="col-lg-2 col-md-6 single-fact">
							<h1 class="counter">2239</h1>
							<p>Eleitores</p>
						</div>
						<div class="col-lg-2 col-md-6 single-fact">
							<h1 class="counter">435</h1>
							<p>Locais de Votação</p>
						</div>	
						<div class="col-lg-1 col-md-6 single-fact">
							<!-- <h1 class="counter">2536</h1>
							<p>Campanhas</p> -->
						</div>											
					</div>
				</div>	
			</section>
@stop