	<div class="form-group">
        {!! Form::label('nome', 'Nome:') !!}
        <span class="req">*</span>
        {!! Form::text('nome', null, ['class' => 'form-control', 'autofocus', 'required']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('ano', 'Ano:') !!}
        <span class="req">*</span>
        {!! Form::input('text', 'ano', null, ['required', 'class' => 'form-control sonumero', 'maxlength' => 4]) !!}
    </div>
    
    <div class="form-group">
        {!! Form::label('nota', 'Nota:') !!}
        <span class="req">*</span>
        <br/>
        {!! Form::input('radio', 'nota', 1, ['required', 'class' => 'star']) !!}
        {!! Form::input('radio', 'nota', 2, ['required', 'class' => 'star']) !!}
        {!! Form::input('radio', 'nota', 3, ['required', 'class' => 'star']) !!}
        {!! Form::input('radio', 'nota', 4, ['required', 'class' => 'star']) !!}
        {!! Form::input('radio', 'nota', 5, ['required', 'class' => 'star']) !!}
        <br/>
    </div>
	
    <div class="form-group">
        {!! Form::label('imagem', 'Imagem de Capa:') !!}
        {!! Form::file('imagem', array('class' => '')) !!}
    </div>

    <div class="form-group">
        {!! Form::label('genero_id', 'Gênero:') !!}
        <span class="req">*</span>
        {!! Form::select('genero_id[]', $generos, isset($filme) ? $generosSelecionados : 0, ['class' => 'form-control text-capitalize chosen-select', 'multiple', 'tabindex' => '4']) !!}
    </div>
	
    <div class="form-group">
        {!! Form::label('pais_id', 'País:') !!}
        {!! Form::select('pais_id', $paises, null, ['class' => 'form-control text-capitalize chosen-select']) !!}
    </div>