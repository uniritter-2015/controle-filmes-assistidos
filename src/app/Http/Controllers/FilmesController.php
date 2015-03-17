<?php namespace App\Http\Controllers;

use App\Filme;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class FilmesController extends Controller {

    public function index()
    {
        $filmes = Filme::latest('created_at')->get();

        return view('filmes.index',compact('filmes'));
    }

    public function detalhes($id)
    {
        $filme = Filme::findOrFail($id);

        return view('filmes.detalhes', compact('filme'));
    }

}
