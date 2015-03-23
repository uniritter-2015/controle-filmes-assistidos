<?php namespace App\Http\Controllers;

use App\Filme;
use App\Http\Controllers\Controller;

use App\Pais;
use App\Genero;
use App\Http\Requests\FilmeRequest;

class FilmesController extends Controller {

    public function getIndex()
    {
        $filmes = Filme::latest('created_at')->get();
		
        return view('filmes.index',compact('filmes'));
    }
    
    public function getFormCadastro()
    {    	
    	$form['paises'] = Pais::all()->sortBy('nome')->lists('nome', 'id');
    	$form['generos'] = Genero::all()->sortBy('nome')->lists('nome', 'id');
    	
    	return view('filmes.cadastrar', ['lista' => $form]);
    }
    
    public function getFormEditar($filmeId)
    {
    	$filme 	= Filme::findOrFail( $filmeId );
    	
    	$form['paises'] = Pais::all()->sortBy('nome')->lists('nome', 'id');
    	$form['generos'] = Genero::all()->sortBy('nome')->lists('nome', 'id');
    	 
    	return view('filmes.editar', ['lista' => $form, 'filme' => $filme]);
    }
    
    public function postSalvar(FilmeRequest $request, $filmeId = null)
    {
    	$filme 	= Filme::findOrNew( $filmeId );
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
}
