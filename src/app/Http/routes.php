<?php
	
	//Route::controller('/omdb/', 'OmdbController');

	Route::get('/omdb', function()
	{
		return view('omdb.index');
	});
	
	
	Route::controller('comentario', 'ComentariosController');
	Route::controller('/', 'FilmesController');
	
?>