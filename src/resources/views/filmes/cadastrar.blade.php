@extends('app')

@section('titulo-secao')
	Novo Filme
@stop

@section('conteudo')

	@include('filmes.partials.erros')
	
	<div class="well well-lg">
		<div class="row">
			<div class="col-md-6">
			{!! Form::open(['url' => 'salvar', 'files' => true]) !!}
		    	@include('filmes.partials.filme_form')
		    	<hr>
		    	@include('filmes.partials.comentario_form')
		    	 <div class="form-group">
		        	{!! Form::submit('Adicionar Filme', ['class' => 'btn btn-sm btn-primary']) !!}
		    	</div>
		    {!! Form::close() !!}
		    </div>
		</div>
    </div>
    
@stop