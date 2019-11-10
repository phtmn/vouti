<div class="row">

    <div class="box-body">
        <h4 class="box-title">Informações da Campanha</h4>
        <hr>
        <div class="form-group ">
            <label for="telefone 1" class="col-sm-4 control-label text-right">Ano *</label>
            <div class="col-sm-8">
                {!! Form::text('responsavel_acesso_telefone_1',null,['class'=>'form-control','id'=>'responsavel_acesso_telefone_1']) !!}
            </div>
        </div>
    </div>
    <div class="box-body">
        <div class="form-group ">
            <label for="telefone 2" class="col-sm-4 control-label text-right">Turno</label>
            <div class="col-sm-8">
                {!! Form::text('responsavel_acesso_telefone_2',null,['class'=>'form-control','id'=>'responsavel_acesso_telefone_2']) !!}
            </div>
        </div>
    </div>
    <div class="box-body">
        <h4 class="box-title">Informações do Partido</h4>
        <hr>
        <div class="box-body">
            <div class="form-group ">
                <label for="logo" class="col-sm-4 control-label text-right">Logo</label>
                <div class="col-sm-8">
                    {!! Form::file('logo',
                    null,
                    ['class'=>'form-control','id'=>'logo']) !!}
                </div>
            </div>
        </div>
        <div class="form-group ">
            <label for="sigla" class="col-sm-4 control-label text-right">Nome</label>
            <div class="col-sm-8">
                {!! Form::text('sigla',
                isset($sindicato->sigla) ? $sindicato->sigla : null,
                ['class'=>'form-control','id'=>'sigla']) !!}
            </div>
        </div>
        </div>
        <div class="box-body">
        <div class="form-group ">
            <label for="sigla" class="col-sm-4 control-label text-right">Sigla</label>
            <div class="col-sm-8">
                {!! Form::text('sigla',
                isset($sindicato->sigla) ? $sindicato->sigla : null,
                ['class'=>'form-control','id'=>'sigla']) !!}
            </div>
        </div>
    </div>
    <div class="box-body">
        <div class="form-group">
            <label for="responsavel_acesso" class="col-sm-4 control-label text-right">Número da Legeda</label>
            <div class="col-sm-8">
                {!! Form::text('numero_trabalhadores',
                isset($sindicato->numero_trabalhadores) ? $sindicato->numero_trabalhadores : null,
                ['class'=>'form-control','id'=>'numero_trabalhadores']) !!}
            </div>
        </div>
    </div>
    <div class="box-body">
        <div class="form-group ">
            <label for="cnpj" class="col-sm-4 control-label text-right">Presidente Nacional</label>
            <div class="col-sm-8">
                {!! Form::text('razao_social',
                isset($sindicato->razao_social) ? $sindicato->razao_social : null,
                ['class'=>'form-control','id'=>'razao_social']) !!}
            </div>
        </div>
    </div>
    <div class="box-body">
        <div class="form-group ">
            <label for="cnpj" class="col-sm-4 control-label text-right">CEP</label>
            <div class="col-sm-8">
                {!! Form::text('cnpj',
                isset($sindicato->cnpj) ? $sindicato->cnpj : null,
                ['class'=>'form-control','id'=>'cnpj']) !!}
            </div>
        </div>
    </div>
    <div class="box-body">
        <div class="form-group ">
            <label for="cnpj" class="col-sm-4 control-label text-right">Endereço</label>
            <div class="col-sm-8">
                {!! Form::text('cnpj',
                isset($sindicato->cnpj) ? $sindicato->cnpj : null,
                ['class'=>'form-control','id'=>'cnpj']) !!}
            </div>
        </div>
    </div>

    <div class="box-body">
        <div class="form-group ">
            <label for="cnpj" class="col-sm-4 control-label text-right">Bairro</label>
            <div class="col-sm-8">
                {!! Form::text('cnpj',
                isset($sindicato->cnpj) ? $sindicato->cnpj : null,
                ['class'=>'form-control','id'=>'cnpj']) !!}
            </div>
        </div>
    </div>

    <div class="box-body">
        <div class="form-group ">
            <label for="cnpj" class="col-sm-4 control-label text-right">Cidade</label>
            <div class="col-sm-8">
                {!! Form::text('cnpj',
                isset($sindicato->cnpj) ? $sindicato->cnpj : null,
                ['class'=>'form-control','id'=>'cnpj']) !!}
            </div>
        </div>
    </div>

    <div class="box-body">
        <div class="form-group ">
            <label for="cnpj" class="col-sm-4 control-label text-right">Estado</label>
            <div class="col-sm-8">
                {!! Form::text('cnpj',
                isset($sindicato->cnpj) ? $sindicato->cnpj : null,
                ['class'=>'form-control','id'=>'cnpj']) !!}
            </div>
        </div>
    </div>

    <div class="box-body">
        <div class="form-group ">
            <label for="cnpj" class="col-sm-4 control-label text-right">Telefone</label>
            <div class="col-sm-8">
                {!! Form::text('cnpj',
                isset($sindicato->cnpj) ? $sindicato->cnpj : null,
                ['class'=>'form-control','id'=>'cnpj']) !!}
            </div>
        </div>
    </div>

    <div class="box-body">
        <div class="form-group ">
            <label for="cnpj" class="col-sm-4 control-label text-right">Site</label>
            <div class="col-sm-8">
                {!! Form::text('cnpj',
                isset($sindicato->cnpj) ? $sindicato->cnpj : null,
                ['class'=>'form-control','id'=>'cnpj']) !!}
            </div>
        </div>
    </div>

    