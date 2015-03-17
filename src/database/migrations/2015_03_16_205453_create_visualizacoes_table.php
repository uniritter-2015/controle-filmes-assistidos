<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVisualizacoesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('visualizacoes', function(Blueprint $table)
		{
			$table->increments('id');
            $table->date('data_visto');
            $table->string('local_visto', 255);
            $table->string('com_quem', 255);
			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('visualizacoes');
	}

}
