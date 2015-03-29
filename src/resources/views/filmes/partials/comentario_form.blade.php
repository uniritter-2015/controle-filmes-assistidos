	<div class="form-group">
        <h3>{!! Form::label('nome', $filme->nome) !!}</h3>
    </div>

    <div class="form-group">
        {!! Form::label('comentario', 'Comentário:') !!}
        {!! Form::textarea('comentario', null, ['class' => 'form-control', 'autofocus', 'rows' => 5]) !!}
    </div>
    
    <div class="form-group">
        {!! Form::label('comquem', 'Com quem?') !!}
        {!! Form::text('comquem', null, ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('local', 'Local:') !!}
        {!! Form::text('local', null, ['class' => 'form-control']) !!}
    </div>
    
    <div class="form-group">
	    {!! Form::label('data', 'Data:') !!}
	    {!! Form::input('date', 'data', null, ['class' => 'form-control']) !!}
    </div>