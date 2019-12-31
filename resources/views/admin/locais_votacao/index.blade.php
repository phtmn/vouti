@extends('admin.layouts.admin')

@section('cabecalho')
<div class="header pb-5 d-flex align-items-center" style="min-height: 350px;  background-size: cover; background-position: center top;">
    <span class="mask bg-gradient-default opacity-8"></span>
    <div class="container-fluid d-flex align-items-center">
        <div class="row">
            <div class="col-lg-12 col-md-10">
                <h1 class="display-2 text-white"> <i class="ni ni-tv-2 text-white"></i> Locais de Votação</h1>
            </div>
        </div>
    </div>
</div>
@stop

@section('conteudo')

<div class="whole-wrap">
	<div class="container">

		<div class="button-group-area">
			<a href=" " class="primary-btn  mt-4">CBla bla blato</a>
		</div>

		<div class="section-top-border">
			<!-- <h3 class="mb-30">Campanhas Cadastradas</h3> -->
			<div class="progress-table-wrap">
				<div class="progress-table">
					<div class="table-head">
						<div class="serial font-weight-bold 900">#</div>
						<div class="country font-weight-bold 900">Nome Completo</div>
						<div class="visit font-weight-bold 900">Nº</div>
						<div class="percentage font-weight-bold 900">Cargo</div>
						<div class="percentage font-weight-bold 900">#</div>
						<div class="percentage font-weight-bold 900">#</div>
					</div>
					
					<div class="table-row">
						<div class="serial"> </div>
						<div class="country">  </div>
						<div class="visit"> </div>
						<div class="percentage">
						
						</div>
						<div class="percentage">
					
						</div>
						<div class="percentage">
						
												</div>
										
						</div>
					
					
					<p class="text-danger mt-2 font-weight-bold 900" style="text-indent: 25px;">Você ainda não cadastrou nenhum candidato! <span></span></p>
			
					</div>
				</div>
			</div>
		</div>
	</div>
</div>


@stop