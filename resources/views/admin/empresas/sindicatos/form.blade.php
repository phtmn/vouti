<div class="row">
    <div class="form-group col-md-4">
        <label for="setor">Partidos (CNPJ)</label>
        {!! Form::select('sindicato',$sindicatos, old('sindicato'),
        ['class'=>'form-control','id'=>'sindicato']) !!}
    </div>

    <div class="form-group col-md-4">
        <label for="setor">Lista de Candidatos</label>
        {!! Form::select('categoria_sindicatos',$categoria_sindicatos, old('categoria_sindicatos'),
        ['class'=>'form-control','id'=>'categoria_sindicatos']) !!}
    </div>


</div>

<div class="row">
    <div class="form-group col-md-12">
        {!! Form::submit('Adicionar',['class'=>'btn btn-primary']) !!}
        <a href="{{route('empresas.index')}}" class='btn btn-default'>Voltar</a>
    </div>
</div>