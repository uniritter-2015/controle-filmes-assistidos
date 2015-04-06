<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
  
  <div class="panel panel-primary">
    <div class="panel-heading" role="tab" id="headingOne">
    	<div class="row">
    		<div class="col-md-10" style="cursor: pointer" data-toggle="collapse" data-target="#collapse{{$filme->id}}">
	          <table>
	          	<tr>
	          		<td rowspan="6">{!! Html::image($filme->imagem, '', ['class' => 'capa-filme' ]) !!}	          		
	          	</tr>
	          	<tr>
	          		<td><label>Título:</label><span class="text-uppercase"> {{ $filme->nome }}</span></td>
	          	</tr>
	          	<tr>
	          		<td class="text-capitalize"><label>Gênero:</label> {{ Form::listarGenerosDoFilme($filme->generos->all()) }}</td>
	          	</tr>
	          	<tr>
	          		<td class="text-capitalize"><label>Última visualização:</label> {{ $filme->data->format('d/m/Y') }}</td>
	          	</tr>
	          	<tr>
	          		<td class="text-capitalize"><label>Nota:</label> {{ $filme->nota }}</td>
	          	</tr>
	          	<tr>
	          		<td><label>Visualizações:</label> {{ $filme->visualizacoes()->count() }}</td>
	          	</tr>
	          </table>
		    </div>
		    <div class="col-md-2">
		    	<table class="botoes-acao">		          	
		          	<tr>
		          		<td>{!! Html::link(URL::to('editar-filme', [$filme->id]), 'Editar', ['title' => 'Editar dados do filme', 'class' => 'btn btn-sm btn-default']) !!}</td>
		          	</tr>
		          	<tr>
		          		<td>{!! Html::link(URL::to('excluir', [$filme->id]), 'Excluir', ['title' => 'Excluir filme', 'name' => "excluir-filme", 'class' => 'btn btn-sm btn-danger']) !!}</td>
		          	</tr>
		          	<tr>
		          		<td>{!! Html::link(URL::to('filmes/visualizacao/adicionar', [$filme->id]), 'Novo Comentário', ['title' => 'Adicionar comentário', 'class' => 'btn btn-sm btn-default']) !!}</td>
		          	</tr>
	          	</table>
		    </div>
	    </div>
    </div>
    <div id="collapse{{$filme->id}}" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
      <div class="panel-body">
      	
      	<table class="table table-bordered table-condensed visualizacao">
      		<tr class="info">
      			<td class="text-center"><label>Comentário</label></td>
      			<td class="text-center"><label>Com Quem</label></td>
      			<td class="text-center"><label>Local</label></td>
      			<td class="text-center"><label>Data</label></td>
      			<td class="text-center"><label>Ação</label></td>
      		</tr>
      		@foreach($filme->visualizacoes as $key => $visualizacao)
      		<tr class="conteudo">
      			<td>
      				{{ $visualizacao->comentario }}
      			</td>
      			<td>
      				{{ $visualizacao->com_quem }}
      			</td>
      			<td>
      				{{ $visualizacao->local }}
      			</td>
      			<td width="15%" class="text-center">
      				{{ $visualizacao->data->format('d/m/Y') }}
      			</td>
      			<td width="15%" -valign="middle" class="text-center">
      				{!! Html::link(URL::to('filmes/visualizacao/editar', [$visualizacao->id]), 'Editar', ['title' => 'Editar detalhes da visualizacao', 'class' => 'btn btn-sm btn-default']) !!}
      				{!! Html::link(URL::to('filmes/visualizacao/excluir', [$visualizacao->id]), 'Excluir', ['title' => 'Editar detalhes da visualizacao', 'class' => 'btn btn-sm btn-danger']) !!}
      			</td>
      		</tr>
      		@endforeach
		</table>
        
      </div>
    </div>
  </div>
 </div>