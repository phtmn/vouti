<div class="form-group">
    <label for="cobertura">Nome*</label>
    {!! Form::text('categoria',null,['class'=>'form-control']) !!}
</div>

<div class="form-group">
    <label for="cct">Foto*</label>
    {!! Form::file('cct',null,['class'=>'form-control', 'id' => 'cct']) !!}
</div>

<div class="form-group">
    <label for="cobertura">Numero do Candidato</label>
    {!! Form::text('valor_beneficio',null,['class'=>'form-control']) !!}
</div>

<div class="form-group">
    <label for="cobertura">Cargo (select)</label>
    {!! Form::text('valor_beneficio',null,['class'=>'form-control']) !!}
</div>

<div class="row">
    <div class="form-group col-md-12">
        {!! Form::submit('Salvar',['class'=>'btn btn-primary']) !!}
        <a href="{{route('sindicato.categorias.listar', request()->route('id'))}}" class='btn btn-default'>Voltar</a>
    </div>
</div>