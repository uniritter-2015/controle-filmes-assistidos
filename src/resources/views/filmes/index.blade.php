@extends('app')

@section('content')

	<ul>
		<li>{!! Html::link(URL::to('incluir'), 'incluir') !!}</li>
	</ul>

    <h1>Filmes</h1>

    @foreach($filmes as $filme)
        <article>
            <h2>
                <a href="{{ action('FilmesController@detalhes', [$filme->id]) }}"> {{ $filme->nome }}</a>
            </h2>


        </article>
    @endforeach

@stop