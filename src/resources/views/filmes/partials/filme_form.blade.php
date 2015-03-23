	<div class="form-group">
        {!! Form::label('nome', 'Nome do Filme:') !!}
        {!! Form::text('nome', null, ['class' => 'form-control', 'autofocus', 'required']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('ano', 'Ano:') !!}
        {!! Form::input('number', 'ano', null, ['class' => 'form-control', 'required', 'min' => "1000", 'max' => "9999"]) !!}
    </div>
    
    <div class="form-group">
        {!! Form::label('nota', 'Nota:') !!}
        {!! Form::selectRange('nota', 0, 10) !!}
    </div>

    <div class="form-group">
        {!! Form::label('nota', 'Imagem de Capa:') !!}
        <input id="" type="file" name="capa-filme">
    </div>
    
    <div class="form-group">
        {!! Form::label('genero_id', 'Gênero:') !!}
        {!! Form::select('genero_id', $lista['generos'], isset($filme) ? $filme->genero->id : 0, ['class' => 'form-control text-capitalize', 'required']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('pais_id', 'País:') !!}
        {!! Form::select('pais_id', $lista['paises'], isset($filme) ? $filme->pais->id : 0, ['class' => 'form-control text-capitalize', 'required']) !!}
    </div>