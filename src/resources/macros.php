<?php

Form::macro('selectNotas', function($name)
{
	$html  = '<select class="form-control" name="$name">';
	$html .= '<option selected="selected" value="-1">Selecione</option>';
	$html .= '<option value="0">0</option>';
	$html .= '<option value="1">1</option>';
	$html .= '<option value="2">2</option>';
	$html .= '<option value="3">3</option>';
	$html .= '<option value="4">4</option>';
	$html .= '<option value="5">5</option>';
	$html .= '</select>';
	
	return $html;
});