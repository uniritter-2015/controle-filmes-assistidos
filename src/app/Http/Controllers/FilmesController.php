<?php namespace App\Http\Controllers;

use App\Filme;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Pais;
use App\Genero;

class FilmesController extends Controller {

    public function getIndex()
    {
        $filmes = Filme::latest('created_at')->get();
		
        return view('filmes.index',compact('filmes'));
    }
    
    public function getIncluir()
    {    	
    	$form['notas'] = Filme::getNotas();
    	$form['paises'] = Pais::all()->sortBy('nome')->lists('nome', 'id');
    	$form['generos'] = Genero::all()->sortBy('nome')->lists('nome', 'id');
    	
    	return view('filmes.incluir', ['lista' => $form]);
    }

}
