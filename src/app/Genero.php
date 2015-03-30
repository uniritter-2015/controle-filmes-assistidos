<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Genero extends Model {

    protected $table = 'generos';

    public function filme()
    {
        return $this->belongsToMany('App\Filme');
    }
}
