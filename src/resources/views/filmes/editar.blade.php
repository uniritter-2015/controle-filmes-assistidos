@extends('app')

@section('titulo-secao')
	Editar Filme
@stop

@section('conteudo')

	@include('filmes.partials.erros')
	
	<div class="well well-lg">
		<div class="row">
			<div class="col-md-6">
			{!! Form::model($filme, ['url' => ['atualizar', $filme->id], 'name' => 'form-editar-filme', 'files' => true]) !!}		
		    	@include('filmes.partials.filme_form')
		    	<div class="row">
		    		<div class="col-md-12">
		    			{!! Form::submit('Salvar', ['class' => 'btn btn-sm btn-primary']) !!}
		    			{!! Html::link(URL::to('excluir', [$filme->id]), 'Excluir', ['title' => 'Excluir filme', 'name' => "excluir-filme", 'class' => 'btn btn-sm btn-danger pull-right']) !!}
		    		</div>
		    	</div>
		    {!! Form::close() !!}
		    </div>
		</div>
	</div>
    
@stop