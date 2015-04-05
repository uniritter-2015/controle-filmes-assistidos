<?php namespace App;

use Illuminate\Database\Eloquent\Model;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Illuminate\Database\Eloquent\Collection;
use Intervention\Image\Facades\Image;

class Filme extends Model {

	private $uploadedFile;
	private $imagemAntiga;
	
    protected $table = 'filmes';

    
    public static function boot()
    {
    	parent::boot();
    	
    	static::updating(function(Filme $filme){
    		
    		$filme->setImagemAntiga( Filme::where('id', $filme->id)->first()->imagem );
    	});
    	
    	static::updated(function(Filme $filme){
    	
    		$uploadFile = $filme->getUploadFile();
    		
    		if( !is_null( $uploadFile ) ){
    			
    			Image::make( $uploadFile->getPathname() )->fit(140, 150)->save( public_path($filme->imagem) );
    				 
    			if( !empty( $filme->getImagemAntiga() ) ){
    				return \File::delete( public_path($filme->getImagemAntiga()) );
    			}
    		}
    		
    	});
    	
    	static::created(function(Filme $filme){
    		
    		$uploadFile = $filme->getUploadFile();
    		if( !is_null( $uploadFile ) ){
    			
    			Image::make( $uploadFile->getPathname() )->fit(140, 150)->save( public_path($filme->imagem) );
    		}
    	});
    	
    	static::saved(function(Filme $filme){
    		
    		if( !\File::isDirectory( public_path('capas') ) ){
    			\File::makeDirectory( public_path('capas'), 0777 );
    		}
    	});
    	
    	static::deleted(function(Filme $filme){
    		
    		if( !empty( $filme->imagem ) ) {
    			
    			return \File::delete( $filme->imagem );
    		}
    		
    	});
    }
    
    public function setImagemAntiga($imagem)
    {
    	$this->imagemAntiga = $imagem;
    }
    public function getImagemAntiga()
    {
    	return $this->imagemAntiga;
    }
    
    public function setPaisIdAttribute($paisId)
    {
    	$pais = Pais::find( intval($paisId) );
    	
    	$this->attributes['pais_id'] = is_null($pais) ? null : $pais->id;
    }
    
    public function setNomeAttribute($value)
    {
    	$this->attributes['nome'] = trim($value);
    }
    
	public function getDataAttribute($date)
    {
        return new \DateTime($date);
    }
    
    public function getUploadFile()
    {
    	return $this->uploadedFile;
    }
    
    public function setImagemAttribute($imagem)
    {
    	if( $imagem instanceof UploadedFile){
    		
    		$this->attributes['imagem'] = 'capas/'.trim($imagem->getClientOriginalName());
    		$this->uploadedFile = $imagem;
    	}
    }    
    public function getImagemAttribute($value)
    {
    	return $value;
    }


    public function generos()
    {
        return $this->belongsToMany('App\Genero');
    }

    public function pais()
    {
        return $this->belongsTo('App\Pais');
    }

    public function visualizacoes()
    {
        return $this->hasMany('App\Visualizacao');
    }
}
