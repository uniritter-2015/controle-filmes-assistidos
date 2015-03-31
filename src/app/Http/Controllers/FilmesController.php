<?php namespace App\Http\Controllers;

use App\Filme;
use App\Http\Controllers\Controller;

use App\Pais;
use App\Genero;
use App\Http\Requests\FilmeRequest;
use Illuminate\Support\Facades\Input;
use Illuminate\Database\Eloquent\Collection;

class FilmesController extends Controller {

    private $notas = ['', 1,2,3,4,5];

    public function getIndex()
    {
        $notas = $this->notas;

        $filmesBuilder = Filme::join('visualizacoes', 'filmes.id', '=', 'visualizacoes.filme_id')->where( \DB::raw('1'),'1');

        if( Input::has('nome') ){
            $filmesBuilder = $filmesBuilder->where('filmes.nome','LIKE', '%'. Input::get('nome'). '%');
        }

        if( Input::has('nota') ){
            $filmesBuilder = $filmesBuilder->where('filmes.nota', Input::get('nota'));
        }

        if( Input::has('data_inicial') ){

            $filmesBuilder = $filmesBuilder->where('visualizacoes.data_visto', '>=', implode('-', array_reverse(explode('/', Input::get('data_inicial')))));
        }

        if( Input::has('data_final') ){

            $filmesBuilder = $filmesBuilder->where('visualizacoes.data_visto', '<=', implode('-', array_reverse(explode('/', Input::get('data_final')))));
        }

        $lista = [];
        $lista['filmes'] = $filmesBuilder->get();
		
        return view('filmes.index', compact('lista', 'notas'));
    }
    
    public function getFormCadastro()
    {
        $notas = $this->notas;
    	$paises = Pais::all()->sortBy('nome')->lists('nome', 'id');
    	$generos = Genero::all()->sortBy('nome')->lists('nome', 'id');
    	
    	array_unshift($paises, '');
    	
    	return view('filmes.cadastrar', compact('notas', 'paises', 'generos'));
    }
    
    public function getFormEditar($filmeId)
    {
    	$filme 	= Filme::findOrFail( $filmeId );

        $notas = $this->notas;
    	$paises = Pais::all()->sortBy('nome')->lists('nome', 'id');
    	$generos = Genero::all()->sortBy('nome')->lists('nome', 'id');
    	$generosSelecionados = $filme->generos->modelKeys();
    	
    	array_unshift($paises, '');
    	
    	return view('filmes.editar', compact('notas', 'paises', 'generos', 'generosSelecionados', 'filme'));
    }
    
    public function postSalvar(FilmeRequest $request, $filmeId = null)
    {
    	$filme 	= Filme::findOrNew( $filmeId );
    	$generos = Genero::findOrFail( $request->input('genero_id') );
    	
    	
    	if( Input::get('pais_id') != 0 ){
    		
    		$pais = Pais::findOrFail( $request->input('pais_id') );
    		$filme->pais()->associate( $pais );
    	}
    	
    	if( $request->hasFile('capa-filme') ){
    		$filme->setUploadFile( $request->file('capa-filme') );
    	}
    	
    	$filme->ano  = $request->input('ano');
    	$filme->nome = $request->input('nome');
    	$filme->nota = $request->input('nota');
    	
    	
    	\DB::transaction(function() use ($filme, $generos){
    		$filme->save();
    		$filme->generos()->saveMany( $generos->all() );

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