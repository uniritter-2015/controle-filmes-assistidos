	<div class="form-group">
        {!! Form::label('nome', 'Nome:') !!}
        <span class="req">*</span>
        {!! Form::text('nome', null, ['class' => 'form-control', 'autofocus', 'required']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('ano', 'Ano:') !!}
        <span class="req">*</span>
        {!! Form::input('number', 'ano', null, ['class' => 'form-control', 'min' => "1000", 'max' => "9999"]) !!}
    </div>
    
    <div class="form-group">
        {!! Form::label('nota', 'Nota:') !!}
        <span class="req">*</span>
        {!! Form::selectRange('nota', 0, 5, 0, ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('capa-filme', 'Imagem de Capa:') !!}
        <input id="" type="file" name="capa-filme">
    </div>
    
    <div class="form-group">
        {!! Form::label('genero_id', 'Gênero:') !!}
        <span class="req">*</span>
        {!! Form::select('genero_id', $lista['generos'], isset($filme) ? $filme->genero->id : 0, ['class' => 'form-control text-capitalize', 'required']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('pais_id', 'País:') !!}
        {!! Form::select('pais_id', $lista['paises'], isset($filme) ? $filme->pais->id : 0, ['class' => 'form-control text-capitalize', 'required']) !!}
    </div>