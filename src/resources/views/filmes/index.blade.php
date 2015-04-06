@extends('app')

@section('titulo-secao')
	mfqjv - Meus filmes que já vi
@stop

@section('conteudo')
	
	<div class="row">
		<div class="col-md-12">
            {!! Form::open(['url' => '/', 'method' => 'GET', 'class' => 'navbar-form navbar-left role="search']) !!}

            @include('filmes.partials.pesquisar_form')

            <div class="form-group">
                {!! Form::submit('Pesquisar', ['class' => 'btn btn-sm btn-primary']) !!}
            </div>
            {!! Form::close() !!}
		</div>
    </div>
				

	<div class="row" style="margin-top: 20px;">
		<div class="col-md-12">
			@foreach($filmes as $indice => $filme)
				@include('filmes.partials.filme_panel')
			@endforeach
		</div>
	</div>

@stop