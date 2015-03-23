@extends('app')

@section('titulo-secao')
	Filmes Assitidos Recentemente
@stop

@section('conteudo')

	@foreach($filmes as $indice => $filme)
	
		<div class="row">
            <div class="col-md-3">
                <a href="#">
                	<img data-src="holder.js/100%x180" alt="100%x180" src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iVVRGLTgiIHN0YW5kYWxvbmU9InllcyI/PjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB3aWR0aD0iMTcxIiBoZWlnaHQ9IjE4MCIgdmlld0JveD0iMCAwIDE3MSAxODAiIHByZXNlcnZlQXNwZWN0UmF0aW89Im5vbmUiPjxkZWZzLz48cmVjdCB3aWR0aD0iMTcxIiBoZWlnaHQ9IjE4MCIgZmlsbD0iI0VFRUVFRSIvPjxnPjx0ZXh0IHg9IjU5LjU1NDY4NzUiIHk9IjkwIiBzdHlsZT0iZmlsbDojQUFBQUFBO2ZvbnQtd2VpZ2h0OmJvbGQ7Zm9udC1mYW1pbHk6QXJpYWwsIEhlbHZldGljYSwgT3BlbiBTYW5zLCBzYW5zLXNlcmlmLCBtb25vc3BhY2U7Zm9udC1zaXplOjEwcHQ7ZG9taW5hbnQtYmFzZWxpbmU6Y2VudHJhbCI+MTcxeDE4MDwvdGV4dD48L2c+PC9zdmc+" data-holder-rendered="true" style="height: 150px; width: 100%; display: block;">
                </a>
            </div>
            <div class="col-md-5">
            	<h3 class="text-capitalize">{!! $filme->nome !!}</h3>
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
            			<td>Nota:&nbsp;</td>
            			<td>{!! $filme->nota !!}</td>
            		</tr>
            	</table>
                <a class="btn btn-primary" href="#">Editar</a>
            </div>
        </div>	
		<hr/>
	@endforeach	

@stop