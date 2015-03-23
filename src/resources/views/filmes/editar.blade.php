@extends('app')

@section('titulo-secao')
	Editar Filme
@stop

@section('conteudo')

	@include('filmes.partials.erros')
	
	<div class="row">
		<div class="col-md-6">
		{!! Form::model($filme, ['url' => 'salvar/'.$filme->id ]) !!}
		{{-- Form::open(['url' => 'salvar', 'files' => true]) --}}
	    	@include('filmes.partials.filme_form')
	    	 <div class="form-group">
	        	{!! Form::submit('Atualizar Dados', ['class' => 'btn btn-sm btn-primary']) !!}
	    	</div>
	    {!! Form::close() !!}
	    </div>
	</div>
    
@stop