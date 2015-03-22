	<div class="form-group">
        {!! Form::label('nome', 'Nome do Filme:') !!}
        {!! Form::text('nome', null, ['class' => 'form-control', 'autofocus', 'required']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('ano', 'Ano:') !!}
        {!! Form::input('number', 'ano', null, ['class' => 'form-control', 'required']) !!}
    </div>
    
    <div class="form-group">
        {!! Form::label('nota', 'Nota:') !!}
        {!! Form::select('nota', $lista['notas'], '', ['class' => 'form-control', 'required']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('genero_id', 'Genero:') !!}
        {!! Form::select('genero_id', $lista['generos'], '', ['class' => 'form-control', 'required']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('pais_id', 'País:') !!}
        {!! Form::select('pais_id', $lista['paises'], '', ['class' => 'form-control', 'required']) !!}
    </div>    

    <div class="form-group">
        {!! Form::submit('Adicionar Filme', ['class' => 'btn btn-primary form-control']) !!}
    </div>