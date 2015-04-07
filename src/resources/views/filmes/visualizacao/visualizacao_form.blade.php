    <div class="form-group">
        {!! Form::label('comentario', 'Comentário:') !!}
        {!! Form::textarea('comentario', null, ['class' => 'form-control', 'autofocus', 'rows' => 2, 'maxlength' => 140]) !!}
    </div>
    
    <div class="form-group">
        {!! Form::label('com_quem', 'Com quem?') !!}
        {!! Form::text('com_quem', null, ['class' => 'form-control', 'maxlength' => 50]) !!}
    </div>

    <div class="form-group">
        {!! Form::label('local', 'Local:') !!}
        {!! Form::text('local', null, ['class' => 'form-control', 'maxlength' => 50]) !!}
    </div>
    
    <div class="form-group">    	
	    {!! Form::label('data', 'Data:', ['title' => 'Data em que o filme foi visto']) !!}
	    <span class="req">*</span>
	    {!! Form::input('text', 'data', isset($visualizacao) ? $visualizacao->data->format('Y-m-d') : '', ['class' => 'form-control data', 'maxlength' => 10]) !!}
    </div>