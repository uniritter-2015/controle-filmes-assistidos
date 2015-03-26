<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFilmesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('filmes', function(Blueprint $table)
		{
			$table->increments('id');			
            $table->integer('genero_id')->unsigned();
            $table->integer('pais_id')->unsigned();
            $table->integer('visualizacao_id')->unsigned();
            
            $table->integer('ano')->nullable();
            $table->text('imagem')->nullable();            
            $table->string('nome')->unique();
            $table->float('nota');
			$table->timestamps();

            $table->foreign('genero_id')
                ->references('id')
                ->on('generos');

            $table->foreign('pais_id')
                ->references('id')
                ->on('paises');

            $table->foreign('visualizacao_id')
                ->references('id')
                ->on('visualizacoes');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('filmes');
	}

}
