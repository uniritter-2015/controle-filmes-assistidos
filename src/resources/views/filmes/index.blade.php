@extends('app')

@section('content')

	<ul>
		<li><h3>{!! Html::link(URL::to('form-cadastrar-filme'), 'Cadastrar') !!}</h3></li>
	</ul>

    <h3>Filmes</h3>

    @foreach($filmes as $filme)
        <article>
            <h2>
            	{!! Html::link( URL::to('form-cadastrar-filme'), 'Cadastrar') !!}
            </h2>

        </article>
    @endforeach

@stop