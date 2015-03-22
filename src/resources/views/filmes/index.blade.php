@extends('app')

@section('content')

	<ul>
		<li><h3>{!! Html::link(URL::to('form-cadastro'), 'Cadastrar') !!}</h3></li>
	</ul>

    <h3>Filmes</h3>

    @foreach($filmes as $filme)
        <article>
            <h2>
            	{!! Html::link( URL::to('form-detalhes', [$filme->id]), $filme->nome) !!}
            </h2>

        </article>
    @endforeach

@stop