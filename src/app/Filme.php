<?php namespace App;

use Illuminate\Database\Eloquent\Model;
use Symfony\Component\HttpFoundation\File\UploadedFile;

class Filme extends Model {

	private $file;
	
    protected $table = 'filmes';

    
    public static function boot()
    {
    	parent::boot();
    	
    	static::updating(function(Filme $filme){
    		
    		$file = $filme->getUploadFile();
    		if( !is_null( $file ) ){
    			
    			$imagemAnterior = Filme::findOrFail( $filme->id )->imagem; 
    			return \File::delete( $imagemAnterior );
    		}
    	});
    	
    	static::saved(function(Filme $filme){
    		
    		$file = $filme->getUploadFile();
    		if( !is_null( $file ) ){
    			$file->move( 'capas/', $file->getClientOriginalName() );
    		}
    	});
    	
    	static::deleted(function(Filme $filme){
    		
    		return \File::delete( $filme->imagem );
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
    	$this->attributes['imagem'] = 'capas/'.trim($imagem);
    }


    public function generos()
    {
        return $this->belongsToMany('App\Genero');
    }

    public function pais()
    {
        return $this->belongsTo('App\Pais');
    }

    public function visualizacao()
    {
        return $this->hasMany('App\Visualizacao');
    }
}
