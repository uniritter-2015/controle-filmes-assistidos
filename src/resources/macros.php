<?php

Form::macro('listarGenerosDoFilme', function(Array $generos){
	
	$lista = [];
	foreach ($generos as $key => $genero) {
		
		$lista[$key] = $genero->nome;
	}
	
	$valor = implode(', ', $lista);
	
	return $valor;
});