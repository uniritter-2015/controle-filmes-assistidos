@extends('app')

@section('content')

	@include('filmes.partials.erros')
	
	{!! Form::open(['url' => 'incluir', 'files' => true]) !!}
    	@include('filmes.partials.filme_form')
    {!! Form::close() !!}
    
@stop