<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
  
  <div class="panel panel-primary">
    <div class="panel-heading" role="tab" id="headingOne">
    	<div class="row">
    		<div class="col-md-10" style="cursor: pointer" data-toggle="collapse" data-target="#collapse{{$filme->id}}">
	          <table>
	          	<tr>
	          		<td rowspan="5"><img style="padding: 5px;margin-right: 10px;" alt="" src="{{ $filme->imagem }}" width="110" height="120"></td>
	          	</tr>
	          	<tr>
	          		<td><label>Título:</label><span class="text-uppercase"> {{ $filme->nome }}</span></td>
	          	</tr>
	          	<tr>
	          		<td class="text-capitalize"><label>Gênero:</label> {{ Form::listarGenerosDoFilme($filme->generos->all()) }}</td>
	          	</tr>
	          	<tr>
	          		<td class="text-capitalize"><label>Visto em:</label> 08/09/2013</td>
	          	</tr>
	          	<tr>
	          		<td class="text-capitalize"><label>Nota:</label> {{ $filme->nota }}</td>
	          	</tr>
	          </table>
		    </div>
		    <div class="col-md-2">
		    	<table class="botoes-acao">		          	
		          	<tr>
		          		<td>{!! Html::link(URL::to('form-editar', [$filme->id]), 'Editar', ['title' => 'Editar dados do filme', 'class' => 'btn btn-sm btn-default']) !!}</td>
		          	</tr>
		          	<tr>
		          		<td>{!! Html::link(URL::to('excluir', [$filme->id]), 'Excluir', ['title' => 'Excluir filme', 'name' => "excluir-filme", 'class' => 'btn btn-sm btn-default']) !!}</td>
		          	</tr>
		          	<tr>
		          		<td>{!! Html::link(URL::to('comentario/form-cadastro', [$filme->id]), 'Novo Comentário', ['title' => 'Adicionar comentário', 'class' => 'btn btn-sm btn-default']) !!}</td>
		          	</tr>
	          	</table>
		    </div>
	    </div>
    </div>
    <div id="collapse{{$filme->id}}" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
      <div class="panel-body">
      	
      	<table class="table table-bordered">
      		<tr class="info">
      			<td class="text-center"><label>Comentário</label></td>
      			<td class="text-center"><label>Com Quem</label></td>
      			<td class="text-center"><label>Local</label></td>
      			<td class="text-center"><label>Data</label></td>
      			<td class="text-center"><label>Ação</label></td>
      		</tr>
      		<tr valign="middle">
      			<td width="35">
      				FGO NǴONSDFǴNFfǵo nsdfǵosdnfǵ osdifng sdfog nsdgoisdfgósidfng  ríofg sfdǵosidf śofid sdfg fdóg isdfǵoisdfǵo isdfgóisdf gśodfig fg oasdnfóasd
      			</td>
      			<td width="10">
      				Filha da vizinha
      			</td>
      			<td width="10">
      				Na sala
      			</td>
      			<td align="center" width="5">
      				09/04/2011
      			</td>
      			<td width="10" valign="middle" class="text-center">
      				{!! Html::link(URL::to('editar-comentario', [$filme->id]), 'Editar', ['title' => 'Edtar comentário', 'class' => 'btn btn-sm btn-default']) !!}
      				{!! Html::link(URL::to('excluir-comentario', [$filme->id]), 'Excluir', ['title' => 'Excluir comentário', 'class' => 'btn btn-sm btn-default']) !!}
      			</td>
      		</tr>
		</table>
        
      </div>
    </div>
  </div>
 </div>