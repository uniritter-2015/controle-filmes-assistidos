@extends('app')

@section('titulo-secao')
	Editar Filme
@stop

@section('conteudo')

	@include('filmes.partials.erros')
	
	<div class="row">
		<div class="col-md-6">
		{!! Form::model($filme, ['url' => 'salvar/'.$filme->id, 'name' => 'form-editar-filme', 'files' => true]) !!}		
	    	@include('filmes.partials.filme_form')
	    	<div class="row">
	    		<div class="col-md-12">
			        	{!! Form::submit('Salvar', ['class' => 'btn btn-sm btn-primary']) !!}
			        	{!! Form::submit('Excluir', ['name' => 'btn-excluir-filme', 'data-filme_id' => $filme->id, 'class' => 'btn btn-sm btn-primary btn-danger pull-right']) !!}
	    		</div>
	    	</div>
	    {!! Form::close() !!}
	    </div>
	</div>
    
@stop