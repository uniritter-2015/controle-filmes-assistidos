<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
  
  <div class="panel panel-primary panel-main">
    <div class="panel-heading" role="tab" id="headingOne">
    	<div class="row"  style="cursor: pointer">
			<div class="col-md-2" data-toggle="collapse" data-target="#collapse{{$filme->id}}">
				{!! Html::image($filme->imagem, '', ['class' => 'capa-filme' ]) !!}
			</div>
			<div class="col-md-7" data-toggle="collapse" data-target="#collapse{{$filme->id}}">
				<h2>{{ $filme->nome }}</h2>
				<label>Gênero:</label> {{ Form::listarGenerosDoFilme($filme->generos->all()) }}</br>
				<label>Visto em:</label> 08/09/2013</br>
				<label>Nota:</label> {{ $filme->nota }}</br>
			</div>
			<div class="col-md-3">
				<div class="botoes-acao text-right">
					{!! Html::link(URL::to('filmes/visualizacao/adicionar',[$filme->id]), 'Comentário', ['title' => 'Novo comentário', 'class' => 'btn btn-primary btn-xs']) !!} 
					&nbsp;&nbsp;
					{!! Html::link(URL::to('editar-filme',[$filme->id]), 'Editar', ['title' => 'Editar filme', 'class' => 'btn btn-warning btn-xs']) !!}
					&nbsp;&nbsp;
					{!! Html::link(URL::to('excluir', [$filme->id]), 'Excluir', ['title' => 'Excluir filme', 'name' => "excluir-filme", 'class' => 'btn  btn-danger btn-xs']) !!}
					
					
				</div>
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
							<a href="{{URL::to('filmes/visualizacao/editar', [$visualizacao->id])}}" title="Editar detalhes"><img src={{asset('img/btn_edit.png')}} style="width:30px;" alt="Editar detalhes"></a>&nbsp;
							<a href="{{URL::to('filmes/visualizacao/excluir', [$visualizacao->id])}}" title="Excluir comentário" ><img src={{asset('img/btn_del.png')}} style="width:30px;" alt="Excluir comentário"></a>&nbsp;
						</td>
					</tr>
					@endforeach
			</table>
		</div>
	</div>
 </div>
	<br/>