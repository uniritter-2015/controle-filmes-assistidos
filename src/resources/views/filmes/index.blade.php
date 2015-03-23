@extends('app')

@section('titulo-secao')
	Filmes Assitidos Recentemente
@stop

@section('conteudo')

	@foreach($filmes as $indice => $filme)
	
		<div class="row">
            <div class="col-md-3">
                <a href="#">
                	<img alt="" width="100%" height="150" src="{{ $filme->imagem }}">
                </a>
            </div>
            <div class="col-md-5">
            
            	<h3 style="margin-top: 0" class="text-capitalize">{!! Html::link(URL::to('form-editar', [$filme->id]), $filme->nome, ['title' => 'Clique para editar']) !!}</h3>
            	<table>
            		<tr>
            			<td>Gênero:&nbsp;</td>
            			<td class="text-capitalize">{!! $filme->genero->nome !!}</td>
            		</tr>
            		<tr>
            			<td>País:&nbsp;</td>
            			<td class="text-capitalize">{!! $filme->pais->nome !!}</td>
            		</tr>
            		<tr>
            			<td>Ano:&nbsp;</td>
            			<td class="text-capitalize">{!! $filme->ano !!}</td>
            		</tr>
            		<tr>
            			<td>Nota:&nbsp;</td>
            			<td>{!! $filme->nota !!}</td>
            		</tr>
            	</table>
            </div>
        </div>	
		<hr/>
	@endforeach	

@stop