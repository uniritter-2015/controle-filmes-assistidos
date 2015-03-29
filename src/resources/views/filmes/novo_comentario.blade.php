@extends('app')

@section('titulo-secao')
	Novo Comentário
@stop

@section('conteudo')

	@include('filmes.partials.erros')
	
	<div class="row">
		<div class="col-md-6">
		{!! Form::open(['url' => 'comentario/novo', 'files' => true]) !!}
	    	@include('filmes.partials.comentario_form')
	    	 <div class="form-group">
	        	{!! Form::submit('Adicionar Comentário', ['class' => 'btn btn-sm btn-primary disabled']) !!}
	    	</div>
	    {!! Form::close() !!}
	    </div>
	</div>
    
@stop