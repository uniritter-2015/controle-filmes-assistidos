<?php

namespace app\Providers;

use Illuminate\Support\ServiceProvider;
use App\Pais;
use App\Genero;
use Illuminate\Database\Eloquent\Collection;

class ComposerServiceProvider extends ServiceProvider {

    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
    	$notas = ['', 1,2,3,4,5];

    	$paises = Pais::all()->sortBy('nome')->lists('nome', 'id');
    	$paises[0] = '';
    	asort($paises);
    	
    	$generos = Genero::all()->sortBy('nome')->lists('nome', 'id');
    	
        view()->share( compact('notas', 'paises', 'generos') );
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

}