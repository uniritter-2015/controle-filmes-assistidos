<?php namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Visualizacao extends Model {

    protected $table = 'visualizacoes';

    public function filme()
    {
        return $this->hasOne('App\Filme');
    }

    public function getDataVistoAttribute($date)
    {
        return new \DateTime($date);

    }
}
