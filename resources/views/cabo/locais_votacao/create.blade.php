@extends('cabo.layouts.template.admin')

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

@if ($errors->any())
<div class="row">
    <div class="alert alert-danger alert-dismissible">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
</div>
@endif

<div class="whole-wrap">
    <div class="container">
        <div class="button-group-area">
            <a href="{{route('campanha.index')}}" class="primary-btn  mt-4"> <i class="fa fa-arrow-left"></i> Voltar</a>
        </div>
        <div class="section-top-border">
        <div class="row">
								<div class="col-lg-3 col-md-3">
									
									</div>
							<div class="col-lg-6 col-md-6">
								<h3 class="mb-30">Form Element</h3>
								<form action="#">

									
										<div class="mt-10">
												<label> Dados gerais  </label> 
												<hr>
												
											</div>
										<div class="row ">																						
												<div class="col-lg-8 mt-10">													
												  <div class="input-group">													
														<input type="text" name="first_name" placeholder="Nome do eleitor" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Nome do eleitor'" required class="single-input">
												  </div>
												</div>												
															<div class="col-lg-4 mt-10">													
																	<div class="input-group">													
																			<div class="form-select" id="default-select">
																					<select>
																						<option value="1">Gênero</option>
																						<option value="1">Masculino</option>
																						<option value="1">Feminino</option>	
																						<option value="1">Outro</option>													
																					</select>
																			
																			</div>
																	</div>
																  </div>
												  </div>											

											  <div class="row ">																						
													<div class="col-lg-5 mt-10">													
													  <div class="input-group">													
															<input type="text" name="last_name" placeholder="Data de nascimento" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Data de nascimento'" required class="single-input">
													  </div>
													</div>
													<div class="col-lg-4 mt-10">
													  <div class="input-group">
															<input type="text" name="last_name" placeholder="CPF" onfocus="this.placeholder = ''" onblur="this.placeholder = 'CPF'" required class="single-input">																										
													  </div>
													</div>
													<div class="col-lg-3 mt-10">
															<div class="input-group">
																  <input type="text" name="last_name" placeholder="RG" onfocus="this.placeholder = ''" onblur="this.placeholder = 'RG'" required class="single-input">														  															  
															</div>
														  </div>
												  </div>

												  <div class="row ">	
																					
														<div class="col-lg-4 mt-10">													
														  <div class="input-group">													
																<input type="email" name="EMAIL" placeholder="Instagram" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Instagram'" required class="single-input">
														  </div>
														</div>
														<div class="col-lg-4 mt-10">
														  <div class="input-group">
																<input type="email" name="EMAIL" placeholder="Facebook" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Facebook'" required class="single-input">
														  </div>
														</div>
														<div class="col-lg-4 mt-10">
																<div class="input-group">
																		<input type="email" name="EMAIL" placeholder="Youtube" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Youtube'" required class="single-input">	  													  															  
																</div>
															  </div>
													  </div>

									
													  <div class="mt-10">
															<label> Endereço do eleitor </label> 
															<hr>
															
														</div>
										  
										  <div class="row ">	
																					
												<div class="col-lg-4 mt-10">													
												  <div class="input-group">													
														<input type="email" name="EMAIL" placeholder="CEP" onfocus="this.placeholder = ''" onblur="this.placeholder = 'CEP'" required class="single-input">
												  </div>
												</div>
												<div class="col-lg-8 mt-10">
												  <div class="input-group">
														<input type="text" name="address" placeholder="Rua/Av." onfocus="this.placeholder = ''" onblur="this.placeholder = 'Rua/Av.'" required class="single-input">
												  </div>
												</div>
												<!-- <div class="col-lg-3 mt-10">
														<div class="input-group">
																<input type="email" name="EMAIL" placeholder="Youtube" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Youtube'" required class="single-input">	  													  															  
														</div>
													  </div> -->
											  </div>	  

											  <div class="row ">
																					
													<div class="col-lg-2 mt-10">													
													  <div class="input-group">													
															<input type="email" name="EMAIL" placeholder="Nº" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Nº'" required class="single-input">
													  </div>
													</div>
													<div class="col-lg-4 mt-10">
													  <div class="input-group">
															<input type="text" name="address" placeholder="Bairro" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Bairro'" required class="single-input">
													  </div>
													</div>
													<div class="col-lg-4 mt-10">
															<div class="input-group">
																	<input type="email" name="EMAIL" placeholder="Cidade" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Cidade'" required class="single-input">	  													  															  
															</div>
														  </div>
														  <div class="col-lg-2 mt-10">
																<div class="input-group">
																		<input type="email" name="EMAIL" placeholder="UF" onfocus="this.placeholder = ''" onblur="this.placeholder = 'UF'" required class="single-input">	  													  															  
																</div>
															  </div>	  
															</div>
															<div class="mt-10">
																	<label> Local de votação </label> 
																	<hr>
																	
																</div>
												  <div class="row ">	
																					
														<div class="col-lg-12 mt-10">													
														  <div class="input-group">													
																<input type="email" name="EMAIL" placeholder="Local de Votação" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Local de Votação'" required class="single-input">
														  </div>
														</div>
														<!-- <div class="col-lg-8 mt-10">
														  <div class="input-group">
															  
																<input type="text" name="address" placeholder="Rua/Av." onfocus="this.placeholder = ''" onblur="this.placeholder = 'Rua/Av.'" required class="single-input">
														  </div>
														</div>													 -->
													  </div>
		  
															  <div class="mt-10">
																	<label> Endereço do local de votação </label> 
																	<hr>
																	
																</div>
												  <div class="row ">	
																					
														<div class="col-lg-4 mt-10">													
														  <div class="input-group">													
																<input type="email" name="EMAIL" placeholder="CEP" onfocus="this.placeholder = ''" onblur="this.placeholder = 'CEP'" required class="single-input">
														  </div>
														</div>
														<div class="col-lg-8 mt-10">
														  <div class="input-group">
															  
																<input type="text" name="address" placeholder="Rua/Av." onfocus="this.placeholder = ''" onblur="this.placeholder = 'Rua/Av.'" required class="single-input">
														  </div>
														</div>
														<!-- <div class="col-lg-3 mt-10">
																<div class="input-group">
																		<input type="email" name="EMAIL" placeholder="Youtube" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Youtube'" required class="single-input">	  													  															  
																</div>
															  </div> -->
													  </div>	  
		
													  <div class="row ">	
																							
															<div class="col-lg-2 mt-10">													
															  <div class="input-group">													
																	<input type="email" name="EMAIL" placeholder="Nº" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Nº'" required class="single-input">
															  </div>
															</div>
															<div class="col-lg-4 mt-10">
															  <div class="input-group">
																	<input type="text" name="address" placeholder="Bairro" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Bairro'" required class="single-input">
															  </div>
															</div>
															<div class="col-lg-4 mt-10">
																	<div class="input-group">
																			<input type="email" name="EMAIL" placeholder="Cidade" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Cidade'" required class="single-input">	  													  															  
																	</div>
																  </div>
																  <div class="col-lg-2 mt-10">
																		<div class="input-group">
																				<input type="email" name="EMAIL" placeholder="UF" onfocus="this.placeholder = ''" onblur="this.placeholder = 'UF'" required class="single-input">	  													  															  
																		</div>
																	  </div>	  
														  </div>
														  <div class="mt-10">
																<label> Dados do voto </label> 
																<hr>
																
															</div>

														  <div class="row ">																						
																<div class="col-lg-5 mt-10">													
																  <div class="input-group">													
																		<input type="email" name="EMAIL" placeholder="Nº do título eleitoral" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Nº do título eleitoral'" required class="single-input">
																  </div>
																</div>
																<div class="col-lg-4 mt-10">
																  <div class="input-group">
																		<input type="email" name="EMAIL" placeholder="Zona" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Zona'" required class="single-input">
																  </div>
																</div>
																<div class="col-lg-3 mt-10">
																		<div class="input-group">
																				<input type="email" name="EMAIL" placeholder="Seção" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Seção'" required class="single-input">	  													  															  
																		</div>
																	  </div>
															  </div>

															  <div class="row ">																						
																	<div class="col-lg-5 mt-10">													
																	  <div class="input-group">													
																			<div class="form-select" id="default-select">
																					<select>
																						<option value="1">Campanha</option>											
																					
																					</select>
																				</div>
																	  </div>
																	</div>
																	<div class="col-lg-7 mt-10">
																	  <div class="input-group">
																			<div class="form-select" id="default-select">
																					<select >
																						<option value="1">Candidato</option>											
																						<option value="2">B</option>
																						<option value="3">C</option>
																					</select>
																				</div>
																	  </div>
																	</div>
																	<!-- <div class="col-lg-3 mt-10">
																			<div class="input-group">
																					<input type="email" name="EMAIL" placeholder="Seção" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Seção'" required class="single-input">	  													  															  
																			</div>
																		  </div> -->
																  </div>	  
										
												
									
													
									
									
												
                                                                  <div class="button-group-area text-center">
                            <button type="submit" class="primary-btn  mt-4 primary-border"><i class="fa fa-save"></i> Salvar</button>
                        </div> 					
									
									
								</form>
							</div>
							<div class="col-lg-3 col-md-3">
								</div>
                        </div>   
                       
        </div>
    </div>
</div>
@stop