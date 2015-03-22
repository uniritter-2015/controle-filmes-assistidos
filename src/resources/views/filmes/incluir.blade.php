@extends('app')

@section('content')

	{!! Form::open(['url' => 'incluir', 'files' => true]) !!}
    	@include('filmes.partials.filme_form')
    {!! Form::close() !!}

    @include('filmes.partials.erros')
@stop