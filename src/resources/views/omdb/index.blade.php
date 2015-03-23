@extends('app')

@section('titulo-secao')
	Teste importar OMDB
@stop

@section('conteudo')
<div>
	<div ng-controller="mfqjvController">
		<input id="nomeIMDB" name="nomeIMDB" type="text" ng-model="nomeBuscar" ng-change="BuscaIMDBporNome()">
		<input id="idIMDB" id="idIMDB" type="text" ng-model="nomeBuscar" ng-change="BuscaIMDBporID()">

		<div ng-repeat="movies in moviesImdb">
			<p><%movies.imdbID%> - <%movies.Title%></P>
			<p><%movies.Year%> <%movies.Released%> <%movies.Genre%></p>
			<img src="<%movies.Poster%>" style="width:250px">
		</div>
	</div>
</div>
	

@stop