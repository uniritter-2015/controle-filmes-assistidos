    <div class="form-group">
    	{!! Form::label('titulo', 'Título:') !!}
    	{!! Form::text('nome', null, ['class' => 'form-control', 'autofocus', 'maxlength' => 50]) !!}
    	
    	{!! Form::label('nota', 'Nota:') !!}        
        {!! Form::selectRange('nota', 0, 10, null, ['class' => 'form-control']) !!}
                
        {!! Form::label('data_inicial', 'Data Inicial:') !!}
        {!! Form::input('date', 'data_inicial', null, ['class' => 'form-control']) !!}
        
        {!! Form::label('data_final', 'Data Final:') !!}
        {!! Form::input('date', 'data_final', null, ['class' => 'form-control']) !!}
    </div>