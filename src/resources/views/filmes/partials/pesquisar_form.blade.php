    <div class="form-group">
        {!! Form::select('criterio', $lista['criterios'], 0, ['class' => 'form-control text-capitalize', 'required']) !!}
        {!! Form::text('valor', null, ['class' => 'form-control', 'autofocus', 'maxlength' => 50]) !!}
    </div>