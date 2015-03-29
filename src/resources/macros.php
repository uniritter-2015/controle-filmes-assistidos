<?php

Form::macro('selectNotas', function($name, $default)
{
	$html  = '<select required="required" class="form-control" name="' .$name. '">';
	
	for ($key = -1; $key <= 5; $key++) {
		
		$selecionado = ($key == $default) ? 'selected = "selected"' : '';
		$texto = ($key == -1) ? 'Selecione' : $key;
		
		$html .= sprintf('<option %s value="%s">%s</option>', $selecionado, $key, $texto);
	}
	
	$html .= '</select>';
	
	return $html;
});

Form::macro('selectGeneros', function($name, Array $generos, $default)
{
	$html  = '<select required="required" class="form-control text-capitalize" name="' .$name. '">';
		
	foreach ($generos as $key => $genero) {
		
		$selecionado = ($key == $default) ? 'selected = "selected"' : '';
		$texto = ($key == 0) ? 'Selecione' : $genero;
		
		$html .= sprintf('<option %s value="%s">%s</option>', $selecionado, $key, $texto);
	}
	
	$html .= '</select>';

	return $html;
});

Form::macro('selectPaises', function($name, Array $paises, $default)
{
	$html  = '<select class="form-control text-capitalize" name="' .$name. '">';

	foreach ($paises as $key => $pais) {

		$selecionado = ($key == $default) ? 'selected = "selected"' : '';
		$texto = ($key == 0) ? 'Selecione' : $pais;

		$html .= sprintf('<option %s value="%s">%s</option>', $selecionado, $key, $texto);
	}

	$html .= '</select>';

	return $html;
});