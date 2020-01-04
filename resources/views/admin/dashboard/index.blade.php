@extends('admin.layouts.admin')

@section('cabecalho')
<div class="header pb-5 d-flex align-items-center" style="min-height: 350px;  background-size: cover; background-position: center top;">
    <span class="mask bg-gradient-dark	 opacity-8"></span>
    <div class="container-fluid d-flex align-items-center">
        <div class="row">
            <div class="col-lg-12 col-md-10">
                <h1 class="display-2 text-white"> <i class="fas fa-file-contract text-white"></i> Dashboard</h1>
            </div>
        </div>
    </div>
</div>
@stop

@section('conteudo')

<div class="container mt--7">

<div class="row">
        <div class="col-xl-5">
          <div class="card">
            <div class="card-header">
              <h5 class="h3 mb-0">Olá, {{ Auth::user()->name }}</h5>
            </div>
            <div class="card-header d-flex align-items-center">
              <div class="d-flex align-items-center">
                <a href="#">
                  <img src="../../assets/img/theme/team-1.jpg" class="avatar">
                </a>
                <div class="mx-3">
                  <a href="#" class="text-dark font-weight-600 text-sm">John Snow</a>
                  <small class="d-block text-muted">3 days ago</small>
                </div>
              </div>
              <div class="text-right ml-auto">
                <button type="button" class="btn btn-sm btn-primary btn-icon">
                  <span class="btn-inner--icon"><i class="ni ni-fat-add"></i></span>
                  <span class="btn-inner--text">Termo de Uso</span>
                </button>
              </div>
            </div>
            <div class="card-body">
              <p class="mb-4">
                Personal profiles are the perfect way for you to grab their attention and persuade recruiters to continue reading your CV because you’re telling them from the off exactly why they should hire you.
              </p>
              <img alt="Image placeholder" src="../../assets/img/theme/img-1-1000x600.jpg" class="img-fluid rounded">
              <div class="row align-items-center my-3 pb-3 border-bottom">
                <div class="col-sm-6">
                  
                </div>
                <div class="col-sm-6 d-none d-sm-block">
                  
                </div>
              </div>
              <!-- Comments -->
              <div class="mb-1">
                <div class="media media-comment">
                  
                  <div class="media-body">
                    
                  </div>
                </div>
                <div class="media media-comment">
                  
                  <div class="media-body">
                    
                  </div>
                </div>
                <hr />
                <div class="media align-items-center">
                  
                  <div class="media-body">
                    
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-7">
          <div class="row">
            <div class="col">
              <div class="card">
                <!-- Card header -->
                <div class="card-header border-0">
                  <h3 class="mb-0">Light table</h3>
                </div>
                <div class="table-responsive">
                  <table class="table align-items-center table-flush">
                    <thead class="thead-light">
                      <tr>
                        <th scope="col" class="sort" data-sort="name">Project</th>
                        <th scope="col" class="sort" data-sort="budget">Budget</th>
                        <th scope="col" class="sort" data-sort="status">Status</th>
                        <th scope="col">Users</th>
                        <th scope="col" class="sort" data-sort="completion">Completion</th>
                        <th scope="col"></th>
                      </tr>
                    </thead>
                    <tbody class="list">
                      <tr>
                        <th scope="row">
                          <div class="media align-items-center">
                            <a href="#" class="avatar rounded-circle mr-3">
                              <img alt="Image placeholder" src="../../assets/img/theme/bootstrap.jpg">
                            </a>
                            <div class="media-body">
                              <span class="name mb-0 text-sm">Argon Design System</span>
                            </div>
                          </div>
                        </th>
                        <td class="budget">
                          $2500 USD
                        </td>
                        <td>
                          <span class="badge badge-dot mr-4">
                            <i class="bg-warning"></i>
                            <span class="status">pending</span>
                          </span>
                        </td>
                        <td>
                          <div class="avatar-group">
                            <a href="#" class="avatar avatar-sm rounded-circle" data-toggle="tooltip" data-original-title="Ryan Tompson">
                              <img alt="Image placeholder" src="../../assets/img/theme/team-1.jpg">
                            </a>
                            <a href="#" class="avatar avatar-sm rounded-circle" data-toggle="tooltip" data-original-title="Romina Hadid">
                              <img alt="Image placeholder" src="../../assets/img/theme/team-2.jpg">
                            </a>
                            <a href="#" class="avatar avatar-sm rounded-circle" data-toggle="tooltip" data-original-title="Alexander Smith">
                              <img alt="Image placeholder" src="../../assets/img/theme/team-3.jpg">
                            </a>
                            <a href="#" class="avatar avatar-sm rounded-circle" data-toggle="tooltip" data-original-title="Jessica Doe">
                              <img alt="Image placeholder" src="../../assets/img/theme/team-4.jpg">
                            </a>
                          </div>
                        </td>
                        <td>
                          <div class="d-flex align-items-center">
                            <span class="completion mr-2">60%</span>
                            <div>
                              <div class="progress">
                                <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;"></div>
                              </div>
                            </div>
                          </div>
                        </td>
                        <td class="text-right">
                          <div class="dropdown">
                            <a class="btn btn-sm btn-icon-only text-light" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              <i class="fas fa-ellipsis-v"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                              <a class="dropdown-item" href="#">Action</a>
                              <a class="dropdown-item" href="#">Another action</a>
                              <a class="dropdown-item" href="#">Something else here</a>
                            </div>
                          </div>
                        </td>
                      </tr>
                      <tr>
                        <th scope="row">
                          <div class="media align-items-center">
                            <a href="#" class="avatar rounded-circle mr-3">
                              <img alt="Image placeholder" src="../../assets/img/theme/angular.jpg">
                            </a>
                            <div class="media-body">
                              <span class="name mb-0 text-sm">Angular Now UI Kit PRO</span>
                            </div>
                          </div>
                        </th>
                        <td class="budget">
                          $1800 USD
                        </td>
                        <td>
                          <span class="badge badge-dot mr-4">
                            <i class="bg-success"></i>
                            <span class="status">completed</span>
                          </span>
                        </td>
                        <td>
                          <div class="avatar-group">
                            <a href="#" class="avatar avatar-sm rounded-circle" data-toggle="tooltip" data-original-title="Ryan Tompson">
                              <img alt="Image placeholder" src="../../assets/img/theme/team-1.jpg">
                            </a>
                            <a href="#" class="avatar avatar-sm rounded-circle" data-toggle="tooltip" data-original-title="Romina Hadid">
                              <img alt="Image placeholder" src="../../assets/img/theme/team-2.jpg">
                            </a>
                            <a href="#" class="avatar avatar-sm rounded-circle" data-toggle="tooltip" data-original-title="Alexander Smith">
                              <img alt="Image placeholder" src="../../assets/img/theme/team-3.jpg">
                            </a>
                            <a href="#" class="avatar avatar-sm rounded-circle" data-toggle="tooltip" data-original-title="Jessica Doe">
                              <img alt="Image placeholder" src="../../assets/img/theme/team-4.jpg">
                            </a>
                          </div>
                        </td>
                        <td>
                          <div class="d-flex align-items-center">
                            <span class="completion mr-2">100%</span>
                            <div>
                              <div class="progress">
                                <div class="progress-bar bg-success" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%;"></div>
                              </div>
                            </div>
                          </div>
                        </td>
                        <td class="text-right">
                          <div class="dropdown">
                            <a class="btn btn-sm btn-icon-only text-light" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              <i class="fas fa-ellipsis-v"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                              <a class="dropdown-item" href="#">Action</a>
                              <a class="dropdown-item" href="#">Another action</a>
                              <a class="dropdown-item" href="#">Something else here</a>
                            </div>
                          </div>
                        </td>
                      </tr>
                      <tr>
                        <th scope="row">
                          <div class="media align-items-center">
                            <a href="#" class="avatar rounded-circle mr-3">
                              <img alt="Image placeholder" src="../../assets/img/theme/sketch.jpg">
                            </a>
                            <div class="media-body">
                              <span class="name mb-0 text-sm">Black Dashboard</span>
                            </div>
                          </div>
                        </th>
                        <td class="budget">
                          $3150 USD
                        </td>
                        <td>
                          <span class="badge badge-dot mr-4">
                            <i class="bg-danger"></i>
                            <span class="status">delayed</span>
                          </span>
                        </td>
                        <td>
                          <div class="avatar-group">
                            <a href="#" class="avatar avatar-sm rounded-circle" data-toggle="tooltip" data-original-title="Ryan Tompson">
                              <img alt="Image placeholder" src="../../assets/img/theme/team-1.jpg">
                            </a>
                            <a href="#" class="avatar avatar-sm rounded-circle" data-toggle="tooltip" data-original-title="Romina Hadid">
                              <img alt="Image placeholder" src="../../assets/img/theme/team-2.jpg">
                            </a>
                            <a href="#" class="avatar avatar-sm rounded-circle" data-toggle="tooltip" data-original-title="Alexander Smith">
                              <img alt="Image placeholder" src="../../assets/img/theme/team-3.jpg">
                            </a>
                            <a href="#" class="avatar avatar-sm rounded-circle" data-toggle="tooltip" data-original-title="Jessica Doe">
                              <img alt="Image placeholder" src="../../assets/img/theme/team-4.jpg">
                            </a>
                          </div>
                        </td>
                        <td>
                          <div class="d-flex align-items-center">
                            <span class="completion mr-2">72%</span>
                            <div>
                              <div class="progress">
                                <div class="progress-bar bg-danger" role="progressbar" aria-valuenow="72" aria-valuemin="0" aria-valuemax="100" style="width: 72%;"></div>
                              </div>
                            </div>
                          </div>
                        </td>
                        <td class="text-right">
                          <div class="dropdown">
                            <a class="btn btn-sm btn-icon-only text-light" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              <i class="fas fa-ellipsis-v"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                              <a class="dropdown-item" href="#">Action</a>
                              <a class="dropdown-item" href="#">Another action</a>
                              <a class="dropdown-item" href="#">Something else here</a>
                            </div>
                          </div>
                        </td>
                      </tr>
                     
                    
                     
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>

          </div>

          <section class=" " >


<div class="header bg-primary pb-6">
      <div class="container-fluid">
        <div class="header-body">
          <div class="row align-items-center py-4">
            <div class="col-lg-6 col-7">
              <h6 class="h2 text-white d-inline-block mb-0">Default</h6>
              <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                  <li class="breadcrumb-item"><a href="#"><i class="fas fa-home"></i></a></li>
                  <li class="breadcrumb-item"><a href="#">Dashboards</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Default</li>
                </ol>
              </nav>
            </div>
            <div class="col-lg-6 col-5 text-right">
              <a href="#" class="btn btn-sm btn-neutral">New</a>
              <a href="#" class="btn btn-sm btn-neutral">Filters</a>
            </div>
          </div>
		  <!-- Card stats -->
		  
          <div class="row">
            <div class="col-xl-3 col-md-6">
              <div class="card card-stats">
                <!-- Card body -->
                <div class="card-body">
                  <div class="row">
                    <div class="col">
                      <h5 class="card-title text-uppercase text-muted mb-0">Campanhas</h5>
                      <span class="h2 font-weight-bold mb-0">350,897</span>
                    </div>
                    <div class="col-auto">
                      <div class="icon icon-shape bg-gradient-red text-white rounded-circle shadow">
                        <i class="ni ni-active-40"></i>
                      </div>
                    </div>
                  </div>
                  <!-- <p class="mt-3 mb-0 text-sm">
                    <span class="text-success mr-2"><i class="fa fa-arrow-up"></i> 3.48%</span>
                    <span class="text-nowrap">Since last month</span>
                  </p> -->
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-md-6">
              <div class="card card-stats">
                <!-- Card body -->
                <div class="card-body">
                  <div class="row">
                    <div class="col">
                      <h5 class="card-title text-uppercase text-muted mb-0">Candidatos</h5>
                      <span class="h2 font-weight-bold mb-0">2,356</span>
                    </div>
                    <div class="col-auto">
                      <div class="icon icon-shape bg-gradient-orange text-white rounded-circle shadow">
                        <i class="ni ni-chart-pie-35"></i>
                      </div>
                    </div>
                  </div>
                  <!-- <p class="mt-3 mb-0 text-sm">
                    <span class="text-success mr-2"><i class="fa fa-arrow-up"></i> 3.48%</span>
                    <span class="text-nowrap">Since last month</span>
                  </p> -->
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-md-6">
              <div class="card card-stats">
                <!-- Card body -->
                <div class="card-body">
                  <div class="row">
                    <div class="col">
                      <h5 class="card-title text-uppercase text-muted mb-0">Cabos Eleitorais</h5>
                      <span class="h2 font-weight-bold mb-0">924</span>
                    </div>
                    <div class="col-auto">
                      <div class="icon icon-shape bg-gradient-green text-white rounded-circle shadow">
                        <i class="ni ni-money-coins"></i>
                      </div>
                    </div>
                  </div>
                  <!-- <p class="mt-3 mb-0 text-sm">
                    <span class="text-success mr-2"><i class="fa fa-arrow-up"></i> 3.48%</span>
                    <span class="text-nowrap">Since last month</span>
                  </p> -->
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-md-6">
              <div class="card card-stats">
                <!-- Card body -->
                <div class="card-body">
                  <div class="row">
                    <div class="col">
                      <h5 class="card-title text-uppercase text-muted mb-0">Locais de Votação</h5>
                      <span class="h2 font-weight-bold mb-0">49,65%</span>
                    </div>
                    <div class="col-auto">
                      <div class="icon icon-shape bg-gradient-info text-white rounded-circle shadow">
                        <i class="ni ni-chart-bar-32"></i>
                      </div>
                    </div>
                  </div>
                  <!-- <p class="mt-3 mb-0 text-sm">
                    <span class="text-success mr-2"><i class="fa fa-arrow-up"></i> 3.48%</span>
                    <span class="text-nowrap">Since last month</span>
                  </p> -->
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
	</section>

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

@section('cabecalho')

<section class="home-about-area section-gap">
				<div class="container">
					<div class="row align-items-center justify-content-between">
						<div class="col-lg-6 col-md-6 home-about-left">							
							<img class="img-fluid" src="{{ asset('site/img/about-img.png') }}" alt="">							
						</div>
						<div class="col-lg-5 col-md-6 home-about-right">
							<h6>Informações do Partido</h6>
							<h1 class="text-uppercase">{{ Auth::user()->nome_partido }}</h1>
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