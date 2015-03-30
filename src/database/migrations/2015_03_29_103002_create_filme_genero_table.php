<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFilmeGeneroTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        Schema::create('filme_genero', function(Blueprint $table)
        {
            $table->increments('id');
            $table->integer('filme_id')->unsigned();
            $table->integer('genero_id')->unsigned();

            $table->foreign('filme_id')
                ->references('id')
                ->on('filmes');

            $table->foreign('genero_id')
                ->references('id')
                ->on('generos');
        });
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
        Schema::drop('filme_genero');
	}

}
