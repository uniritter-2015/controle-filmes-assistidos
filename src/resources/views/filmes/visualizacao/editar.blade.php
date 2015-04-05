@extends('app')

@section('titulo-secao')
	Editar Comentário	
@stop
@section('subtitulo-secao')
	{{-- $filme->nome --}}	
@stop

@section('conteudo')

	@include('filmes.partials.erros')
	
	<div class="well well-lg">
		<div class="row">
			<div class="col-md-6">
			{!! Form::model($visualizacao, ['url' => ['filmes/visualizacao/editar', $visualizacao->id], 'name' => 'form-editar-visualizacao']) !!}
		    	@include('filmes.visualizacao.visualizacao_form')
		    	 <div class="form-group">
		        	{!! Form::submit('Salvar', ['class' => 'btn btn-sm btn-primary']) !!}
		        	{!! Html::link(URL::to('filmes/visualizacao/excluir', [$visualizacao->id]), 'Excluir', ['title' => 'Excjuir', 'class' => 'pull-right btn btn-sm btn-danger']) !!}
		    	</div>
		    {!! Form::close() !!}
		    </div>
		</div>
	</div>
    
@stop