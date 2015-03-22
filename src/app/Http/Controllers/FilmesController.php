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
    
    public function getFormCadastro()
    {    	
    	$form['notas'] = Filme::getNotas();
    	$form['paises'] = Pais::all()->sortBy('nome')->lists('nome', 'id');
    	$form['generos'] = Genero::all()->sortBy('nome')->lists('nome', 'id');
    	
    	return view('filmes.cadastrar', ['lista' => $form]);
    }
    
    public function getFormDetalhes($filmeId)
    {
    	$filme = Filme::findOrFail( $filmeId );
    	
    	return view('filmes.detalhes', compact('filme'));
    }
    
    public function postSalvar(Request $request)
    {
    	$filme 	= Filme::findOrNew( $request->input('filme_id') );
    	$genero = Genero::findOrFail( $request->input('genero_id') );
    	$pais 	= Pais::findOrFail( $request->input('pais_id') );
    	
    	$filme->ano  = $request->input('ano');
    	$filme->nome = $request->input('nome');
    	$filme->nota = $request->input('nota');
    	$filme->genero()->associate( $genero );
    	$filme->pais()->associate( $pais );
    	
    	\DB::transaction(function() use ($filme){
    		
    		$filme->save();
    		
    	});
    	
    	return redirect('/');
    }
    
    public function getDetalhes()
    {
    	
    }

}
