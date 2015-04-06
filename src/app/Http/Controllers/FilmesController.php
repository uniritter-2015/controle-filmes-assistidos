<?php namespace App\Http\Controllers;

use App\Filme;
use App\Http\Controllers\Controller;

use App\Pais;
use App\Genero;
use App\Http\Requests\FilmeRequest;
use Illuminate\Support\Facades\Input;
use Illuminate\Database\Eloquent\Collection;
use App\Visualizacao;

class FilmesController extends Controller {

    public function getIndex()
    {
        $filmesBuilder = Filme::join('visualizacoes', 'visualizacoes.filme_id', '=', 'filmes.id')->where( \DB::raw('1'),'1');

        if( Input::has('nome') ){
            $filmesBuilder = $filmesBuilder->where('filmes.nome','LIKE', '%'. Input::get('nome'). '%');
        }

        if(Input::get('nota')!= 0){
            $filmesBuilder = $filmesBuilder->where('filmes.nota', Input::get('nota'));
        }

        if( Input::has('data_inicial') ){

            $filmesBuilder = $filmesBuilder->where('visualizacoes.data', '>=', implode('-', array_reverse(explode('/', Input::get('data_inicial')))));
        }

        if( Input::has('data_final') ) {

            $filmesBuilder = $filmesBuilder->where('visualizacoes.data', '<=', implode('-', array_reverse(explode('/', Input::get('data_final')))));
        }

        $filmes = $filmesBuilder->groupBy('filmes.id')->get();
		
        return view('filmes.index', compact('filmes'));
    }
    
    public function getAdicionarFilme()
    {
    	return view('filmes.adicionar');
    }
    
    public function getEditarFilme($filmeId)
    {
    	$filme = Filme::FindOrFail( $filmeId );
    	
    	$generosSelecionados = $filme->generos->modelKeys();
    	
    	return view('filmes.editar', compact('generosSelecionados', 'filme'));
    }
    
    public function postAdicionar(FilmeRequest $request)
    {
    	$filme = new Filme();
    	$filme->pais_id = $request->pais_id;
    	$filme->ano  = $request->ano;
    	$filme->nome = $request->nome;
    	$filme->nota = $request->nota;
    	$filme->imagem = $request->file('imagem');
    	
    	$visualizacao = new Visualizacao();
    	$visualizacao->comentario = $request->comentario;
    	$visualizacao->com_quem   = $request->com_quem;
    	$visualizacao->local 	  = $request->local;
    	$visualizacao->data 	  =	$request->data;
    	
    	$generos = Genero::findOrFail( $request->genero_id );
    	
    	\DB::transaction(function() use ($filme, $generos, $visualizacao){
    	
    		$filme->save();
    		$filme->generos()->saveMany( $generos->all() );
    		$visualizacao->filme()->associate( $filme )->save();
    	});
    	
    	return redirect('/');
    }
    
    public function postAtualizar(FilmeRequest $request, $filmeId)
    {
    	$filme = Filme::findOrFail( $filmeId );
    	$filme->pais_id = $request->pais_id;
    	$filme->ano  = $request->input('ano');
    	$filme->nome = $request->input('nome');
    	$filme->nota = $request->input('nota');
    	$filme->imagem = $request->file('imagem');
    	
    	$generos = Genero::findOrFail( $request->genero_id );    	
    	
    	\DB::transaction(function() use ($filme, $generos){
    	
    		$filme->save();
    		$filme->generos()->sync( $generos->modelKeys() );
    	});
    	
    	return redirect('/');
    }
    
    public function postExcluir( $filmeId )
    {
    	$filme 	= Filme::findOrFail( $filmeId );

    	\DB::transaction(function() use ($filme){
    		$filme->delete();
    	});
    	
    	return response()->json(['success' => true]);
    }
}