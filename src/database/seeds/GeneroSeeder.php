<?php
use App\Genero;
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class GeneroSeeder extends Seeder
{
    public function run()
    {
        Genero::create(array('nome' =>'comédia'));
        Genero::create(array('nome' =>'drama'));
        Genero::create(array('nome' =>'terror'));
        Genero::create(array('nome' =>'suspense'));
        Genero::create(array('nome' =>'documentário'));
        Genero::create(array('nome' =>'românce'));
        Genero::create(array('nome' =>'erótico'));
        Genero::create(array('nome' =>'ação'));
    }
}