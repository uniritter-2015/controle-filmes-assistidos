@extends('app')

@section('content')

	@include('filmes.partials.erros')
	
	{!! Form::open(['url' => 'salvar', 'files' => true]) !!}
    	@include('filmes.partials.filme_form')
    {!! Form::close() !!}
    
@stop