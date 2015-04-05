<?php namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Filme;
use App\Http\Requests\VisualizacaoRequest;
use App\Visualizacao;

class VisualizacaoController extends Controller {
	
	public function getAdicionar($filmeId)
	{
		$filme = Filme::findOrFail($filmeId);
		
		return view('filmes.visualizacao.adicionar', compact('filme'));
	}
	
	public function postAdicionar( VisualizacaoRequest $request, $filmeId )
	{
		$filme = Filme::FindOrFail( $filmeId );
		
		$visualizacao = new Visualizacao();
		$visualizacao->comentario = $request->comentario;
		$visualizacao->com_quem   = $request->com_quem;
		$visualizacao->local 	  = $request->local;
		$visualizacao->data 	  =	$request->data;
		
		\DB::transaction(function() use ($filme, $visualizacao){
			 
			$filme->save();
			$visualizacao->filme()->associate( $filme )->save();
		});
			 
		return redirect('/');
		
	}
	
	public function getEditar($visualizacaoId)
	{
		$visualizacao = Visualizacao::findOrFail( $visualizacaoId );
	
		return view('filmes.visualizacao.editar', compact('visualizacao') );
	}
	
	public function postEditar(VisualizacaoRequest $request, $visualizacaoId)
	{
		$visualizacao = Visualizacao::findOrFail( $visualizacaoId );
		$visualizacao->comentario = $request->comentario;
		$visualizacao->com_quem   = $request->com_quem;
		$visualizacao->local 	  = $request->local;
		$visualizacao->data 	  =	$request->data;
		
		$visualizacao->save();
		
		return redirect('/');
	}
	
	public function getExcluir($visualizacaoId)
	{
		\DB::transaction(function() use ($visualizacaoId){
			 
			Visualizacao::findOrFail( $visualizacaoId )->delete();
		});
		
		return redirect('/');
	}
}