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
            $table->integer('pais_id')->nullable()->unsigned();
            $table->string('nome')->unique();
            $table->integer('ano');
            $table->string('imagem', 255)->nullable();
            $table->text('ext')->nullable();
            $table->integer('nota');
			$table->timestamps();

            $table->foreign('pais_id')
                ->references('id')
                ->on('paises');
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
