<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Comentario extends Model {

    protected $table = 'comentarios';

    public function filme()
    {
        return $this->belongsTo('App\Filme');
    }
}
