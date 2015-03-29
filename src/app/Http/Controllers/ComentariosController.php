<?php namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Filme;

class ComentariosController extends Controller {
	
	public function getFormCadastro($filmeId)
	{
		$form['filme'] = Filme::findOrFail($filmeId);
		
		return view('filmes.novo_comentario', $form);
	}
}