<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Pais extends Model {

    protected $table = 'paises';

    public function filme()
    {
        return $this->hasMany('App\Filme');
    }
}
