<?php
use App\Genero;
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class GeneroSeeder extends Seeder
{
    public function run()
    {
        Genero::create(array('nome' =>'Comédia'));
        Genero::create(array('nome' =>'Drama'));
        Genero::create(array('nome' =>'Terror'));
        Genero::create(array('nome' =>'Suspense'));
        Genero::create(array('nome' =>'Documentário'));
        Genero::create(array('nome' =>'Românce'));
        Genero::create(array('nome' =>'Erótico'));
        Genero::create(array('nome' =>'Ação'));
    }
}