<?php

namespace tests;

use App\Genero;
use App\Pais;
use App\Filme;

class FilmesTest extends \TestCase{

	public function testGetIndexRequest()
	{
		$response = $this->call('GET', '/');
	
		$this->assertEquals(200, $response->getStatusCode());
	}
	
	public function testFilmeValidoDeveSerCriado()
	{
		$acao = Genero::findOrNew( 8 );
		$eua = Pais::find( 1 );
		
		$umDrinkNoInferno = new Filme();
		$umDrinkNoInferno->nome = 'Um Drink no Inferno';
		$umDrinkNoInferno->nota = 8;
		$umDrinkNoInferno->genero()->associate( $acao );
		$umDrinkNoInferno->pais()->associate( $eua );
		$salvou = $umDrinkNoInferno->save();
		
		$this->assertEquals('ação', $acao->nome);
		$this->assertEquals('eua', $eua->nome);
		$this->assertTrue( $salvou );
		
	}
	
	/**
	 * @expectedException PDOException
	 */
	public function testFilmeSemGeneroDeveFalhar()
	{
		$eua = Pais::find( 1 );
		
		$umDrinkNoInferno = new Filme();
		$umDrinkNoInferno->nome = 'Um Drink no Inferno';
		$umDrinkNoInferno->nota = 8;
		$umDrinkNoInferno->pais()->associate( $eua );
		$umDrinkNoInferno->save();		
	}
	
	/**
	 * @expectedException PDOException
	 */
	public function testFilmeSemPaisDeveFalhar()
	{
		$acao = Genero::findOrNew( 8 );
	
		$umDrinkNoInferno = new Filme();
		$umDrinkNoInferno->nome = 'Um Drink no Inferno';
		$umDrinkNoInferno->nota = 8;
		$umDrinkNoInferno->genero()->associate( $acao );
		$umDrinkNoInferno->save();
	}
	
	/**
	 * @expectedException PDOException
	 */
	public function testFilmeComNomeJaExistenteDeveFalhar()
	{
		$comedia = Genero::findOrNew( 1 );
		$eua = Pais::find( 1 );
	
		$filme01 = new Filme();
		$filme01->nome = 'Uma Babá quase Perfeita';
		$filme01->nota = 8;
		$filme01->genero()->associate( $comedia );
		$filme01->pais()->associate( $eua );
		$filme01->save();
		
		//
		
		$documentario = Genero::findOrNew( 5 );
		
		$filme02 = new Filme();
		$filme02->nome = 'Uma Babá quase Perfeita';
		$filme02->nota = 9;
		$filme02->genero()->associate( $documentario );
		$filme02->pais()->associate( $eua );
		$filme02->save();
	}
}