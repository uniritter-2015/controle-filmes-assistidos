<?php

Form::macro('selectNotas', function($name, $default)
{
	$html  = '<select required="required" class="form-control" name="' .$name. '">';
	
	$html .= sprintf('<option %s value="-1">Selecione</option>', ($default == -1) ? 'selected = "selected"' : '');
	for ($key = 0; $key <= 5; $key++) {
		
		$html .= sprintf('<option %s value="%s">%s</option>', ($key == $default) ? 'selected = "selected"' : '', $key, $key);
	}
	
	$html .= '</select>';
	
	return $html;
});

Form::macro('selectGeneros', function($name, Array $generos, $default)
{
	$html  = '<select required="required" class="form-control text-capitalize" name="' .$name. '">';
	
	$html .= sprintf('<option %s value="0">Selecione</option>', ($default == 0) ? 'selected = "selected"' : '');
	foreach ($generos as $key => $genero) {
		
		$html .= sprintf('<option %s value="%s">%s</option>', ($key == $default) ? 'selected = "selected"' : '', $key, $genero);
	}
	
	$html .= '</select>';

	return $html;
});

Form::macro('selectPaises', function($name, Array $paises, $default)
{
	$html  = '<select required="required" class="form-control text-capitalize" name="' .$name. '">';
	
	$html .= sprintf('<option %s value="0">Selecione</option>', ($default == 0) ? 'selected = "selected"' : '');
	foreach ($paises as $key => $pais) {
		
		$html .= sprintf('<option %s value="%s">%s</option>', ($key == $default) ? 'selected = "selected"' : '', $key, $pais);
	}
	
	$html .= '</select>';

	return $html;
});