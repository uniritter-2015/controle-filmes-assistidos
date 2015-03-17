<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Genero extends Model {

    protected $table = 'generos';

    public function filme()
    {
        return $this->hasMany('App\Filme');
    }

}
