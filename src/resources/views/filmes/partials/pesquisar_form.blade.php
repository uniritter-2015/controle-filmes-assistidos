    <div class="form-group">
    	{!! Form::label('titulo', 'Título:') !!}
    	{!! Form::text('nome', null, ['class' => 'form-control', 'maxlength' => 255]) !!}
    	
    	{!! Form::label('nota', 'Nota:') !!}        
        {!! Form::selectRange('nota', 1, 5, null, ['class' => 'form-control']) !!}
                
        {!! Form::label('data_inicial', 'Data Inicial:') !!}
        {!! Form::input('date', 'Visualizacao.data_inicial', null, ['class' => 'form-control']) !!}
        
        {!! Form::label('data_final', 'Data Final:') !!}
        {!! Form::input('date', 'data_final', null, ['class' => 'form-control']) !!}
    </div>