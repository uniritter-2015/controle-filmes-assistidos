	<div class="form-group">
        {!! Form::label('nome', 'Nome do Filme:') !!}
        {!! Form::text('nome', null, ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('nota', 'Nota:') !!}
        {!! Form::select('nota', $notas, '', ['class' => 'form-control']) !!}
    </div>

    

    <div class="form-group">
        {!! Form::label('imagem', 'Imagem') !!}
        {!! Form::file('imagem', null, ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::submit('Adicionar Filme', ['class' => 'btn btn-primary form-control']) !!}
    </div>