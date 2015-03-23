<?php namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class OmdbController extends Controller {


	public function getIndex()
	{
		return view('omdb.index');
	}

}

?>