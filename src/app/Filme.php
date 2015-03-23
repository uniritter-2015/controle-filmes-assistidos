<?php namespace App;

use Illuminate\Database\Eloquent\Model;
use Symfony\Component\HttpFoundation\File\UploadedFile;

class Filme extends Model {

	private $file;
	
    protected $table = 'filmes';

    
    public static function boot()
    {
    	parent::boot();
    	
    	static::created(function(Filme $filme){
    		
    		$file = $filme->getUploadFile();
    		$imagem = $filme->imagem;
    		
    		$file->move( 'capas/', $file->getClientOriginalName() );
    		
    	});
    }
    
    
    public function getUploadFile()
    {
    	return $this->file;
    }
    public function setUploadFile(UploadedFile $file)
    {
    	$this->file = $file;
    	$this->imagem = $file->getClientOriginalName();
    }
    
    public function setImagemAttribute($imagem)
    {
    	$this->attributes['imagem'] = '/capas/'.trim($imagem);
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
