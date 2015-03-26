<?php namespace App\Http\Controllers;

use App\Filme;
use App\Http\Controllers\Controller;

use App\Pais;
use App\Genero;
use App\Http\Requests\FilmeRequest;
use Illuminate\Support\Facades\Input;

class FilmesController extends Controller {

    public function getIndex()
    {
        $form = [];
        $form['filmes'] = Filme::latest('created_at')->get();
        $form['criterios'] = ['nome' => 'título']; 
		
        return view('filmes.index', ['lista' => $form]);
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
    
    public function getPesquisar()
    {
    	$filmes = Filme::where( Input::get('criterio'),'LIKE', '%'. Input::get('valor'). '%' )->latest('created_at')->get();
    	
    	$form = [];
        $form['filmes'] = $filmes;
        $form['criterios'] = ['nome' => 'título'];
        
    	return view('filmes.index', ['lista' => $form]);
    }
    
    public function postSalvar(FilmeRequest $request, $filmeId = null)
    {
    	$filme 	= Filme::findOrNew( $filmeId );
    	$genero = Genero::findOrFail( $request->input('genero_id') );
    	$pais 	= Pais::findOrFail( $request->input('pais_id') );
    	
    	if( $request->hasFile('capa-filme') ){
    		$filme->setUploadFile( $request->file('capa-filme') );
    	}
    	
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
    
    public function postExcluir()
    {
    	$filme 	= Filme::findOrFail( Input::get('filme_id') );

    	\DB::transaction(function() use ($filme){
    		$filme->delete();
    	});
    	
    	return response()->json(['success' => true]);
    }
}