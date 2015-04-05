<?php namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Visualizacao extends Model {

    protected $table = 'visualizacoes';
    
	public static function boot()
    {
    	parent::boot();
    	
    	static::deleted(function(Visualizacao $visualizacao){
    		
    		if( $visualizacao->where('filme_id', $visualizacao->filme_id)->count() == 0 ){
    			
    			$visualizacao->filme->delete();
    		}
    	});
    }
    
    public function setComentarioAttribute($value)
    {
    	$this->attributes['comentario'] = trim($value);
    }
    
    public function setComQuemAttribute($value)
    {
    	$this->attributes['com_quem'] = trim($value);
    }
    
    public function setLocalAttribute($value)
    {
    	$this->attributes['local'] = trim($value);
    }

    public function getDataAttribute($date)
    {
        return new \DateTime($date);
    }

    public function filme()
    {
        return $this->belongsTo('App\Filme');
    }
}
