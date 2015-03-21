<?php

namespace tests;

use App\Genero;
use App\Pais;
use App\Filme;

class FilmesTest extends \TestCase{

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
}