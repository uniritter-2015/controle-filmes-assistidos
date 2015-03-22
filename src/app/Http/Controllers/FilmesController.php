<?php namespace App\Http\Controllers;

use App\Filme;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class FilmesController extends Controller {

    public function getIndex()
    {
        $filmes = Filme::latest('created_at')->get();
		
        return view('filmes.index',compact('filmes'));
    }
    
    public function getIncluir()
    {    	
    	return view('filmes.incluir', ['notas' => Filme::getNotas()]);
    }

}
