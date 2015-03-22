<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Filme extends Model {

    protected $table = 'filmes';
    
    /**
     * @return Array
     */
    public static function getNotas()
    {
    	$notas = [];
    	for($i = 0; $i <= 10; $i++){
    		
    		$notas[$i] = $i;
    	}
    	
    	return $notas;
    }
    
    
    public function genero()
    {
        return $this->belongsTo('App\Genero');
    }

    public function pais()
    {
        return $this->belongsTo('App\Pais');
    }

    public function comentarios()
    {
        return $this->hasMany('App\Comentario');
    }

    public function visualizacao()
    {
        return $this->belongsTo('App\Visualizacao');
    }
}
