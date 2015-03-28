<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
  
  <div class="panel panel-primary">
    <div class="panel-heading" role="tab" id="headingOne">
    	<div class="row">
    		<div class="col-md-10" style="cursor: pointer" data-toggle="collapse" data-target="#collapse{{$filme->id}}">
	          <table>
	          	<tr>
	          		<td rowspan="5"><img style="padding: 5px;" alt="" src="" width="100" height="120"></td>
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
		          		<td><input class="btn btn-md btn-success" type="button" value="Comentar"></td>
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
        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
      </div>
    </div>
  </div>
 </div>