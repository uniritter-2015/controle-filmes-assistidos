<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
  
  <div class="panel panel-primary">
    <div class="panel-heading" role="tab" id="headingOne">
    	<div class="row">
    		<div class="col-md-10" style="cursor: pointer" data-toggle="collapse" data-target="#collapse{{$filme->id}}">
	          <table>
	          	<tr>
	          		<td rowspan="5"><img style="padding: 5px;" alt="" src="{{ $filme->imagem }}" width="100" height="120"></td>
	          	</tr>
	          	<tr>
	          		<td class="text-capitalize"><label>Título:</label> {{ $filme->nome }}</td>
	          	</tr>
	          	<tr>
	          		<td class="text-capitalize"><label>Gênero:</label> {{ $filme->genero->nome }}</td>
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
		          		<td><input class="btn btn-md btn-default" type="button" value="Comentar"></td>
		          	</tr>
		          	<tr>
		          		<td><input class="btn btn-md btn-warning" type="button" value="Editar"></td>
		          	</tr>
		          	<tr>
		          		<td><input class="btn btn-md btn-danger" type="button" value="Excluir"></td>
		          	</tr>
	          	</table>
		    </div>
	    </div>
    </div>
    <div id="collapse{{$filme->id}}" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
      <div class="panel-body">
      	
      	
      	<table class="table table-bordered">
      		<tr>
      			<td class="text-center"><label>Comentário</label></td>
      			<td class="text-center"><label>Com Quem</label></td>
      			<td class="text-center"><label>Local</label></td>
      			<td class="text-center"><label>Data</label></td>
      			<td class="text-center"><label>Ações</label></td>
      		</tr>
      		<tr valign="middle">
      			<td width="30">
      				FGO NǴONSDFǴNFfǵo nsdfǵosdnfǵ osdifng sdfog nsdgoisdfgósidfng  ríofg sfdǵosidf śofid sdfg fdóg isdfǵoisdfǵo isdfgóisdf gśodfig fg oasdnfóasd
      			</td>
      			<td width="10">
      				Meu melhor amigo
      			</td>
      			<td width="10">
      				Na sala
      			</td>
      			<td width="10">
      				09/04/2011
      			</td>
      			<td width="10" valign="middle" class="text-center">
      				<input class="btn btn-sm btn-warning" type="button" value="Editar">
      				<input class="btn btn-sm btn-danger" type="button" value="Excluir">
      			</td>
      		</tr>
		</table>
        
      </div>
    </div>
  </div>
 </div>