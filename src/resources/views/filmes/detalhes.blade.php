@extends('app')

@section('content')
    <h1>{{ $filme->nome }}</h1>

    <article>
        <fieldset>Detalhes</fieldset>
        <fieldset>
            Gênero: {{ $filme->genero->nome }}<br/>
            País: {{ $filme->pais->nome }}<br/>
            Nota: {{ $filme->nota }}<br/>
            Imagem: {{ $filme->imagem }}<br/><br/>
        </fieldset>

        @foreach($filme->comentarios as $key=>$coment)
            {{$key.' '.$coment->comentario}}</br>
        @endforeach



        <fieldset>Visualização</fieldset>
        <fieldset>
            Data: {{ $filme->visualizacao->data_visto->format('d/m/Y') }}<br/>
            Local: {{ $filme->visualizacao->local_visto }}<br/>
            Com quem: {{ $filme->visualizacao->com_quem }}<br/>
        </fieldset>
    </article>
@stop