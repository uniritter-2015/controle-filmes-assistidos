<?php
	
	//Route::controller('/omdb/', 'OmdbController');

	Route::get('/omdb', function()
	{
		return view('omdb.index');
	});
	
	
	Route::controller('/', 'FilmesController');
	Route::controller('/comentario', 'ComentariosController');
?>