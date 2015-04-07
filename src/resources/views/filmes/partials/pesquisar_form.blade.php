    <div class="form-group">
    	{!! Form::label('titulo', 'Título:') !!}
    	{!! Form::text('nome', null, ['class' => 'form-control', 'maxlength' => 255]) !!}
    	
    	{!! Form::label('nota', 'Nota:') !!}
        {!! Form::select('nota', $notas, '', ['class' => 'form-control']) !!}
                
        {!! Form::label('data_inicial', 'Data Inicial:') !!}
        {!! Form::input('text', 'data_inicial', null, ['class' => 'form-control data', 'maxlength' => 10]) !!}

        {!! Form::label('data_final', 'Data Final:') !!}
        {!! Form::input('text', 'data_final', null, ['class' => 'form-control data', 'maxlength' => 10]) !!}
    </div>