@extends('site.painel.dashboard')

@section('painel')

   

    

    <div class="box box-primary">
        <div class="box-header with-border">
          <h3 class="box-title"> Ocorrências</h3>
            <div class="box-header with-border">
                <p><strong>Os campos com (*) são obrigatórios</strong></p>
            </div>
        </div>

        
    </div>

    <div class="container" id="box-consulta-ocorrencia">
        {{-- Dados gerados dinamicamente --}}
    </div>
@stop

@section('js')
    <script src="{{ asset('js/jquery.mask.min.js') }}"></script>
    <script src="{{ asset('js/ocorrencias.js') }}"></script>
    <script src="{{ asset('js/consultar_ocorrencias.js') }}"></script>

    <script>
      $("#registrar-cpf,#consultar-cpf").mask('000.000.000-00');
    </script>
@stop