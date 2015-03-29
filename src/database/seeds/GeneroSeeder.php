<?php
use App\Genero;
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class GeneroSeeder extends Seeder
{
    public function run()
    {
        Genero::create(array('nome' =>'Ação'));
        Genero::create(array('nome' =>'Animação'));
        Genero::create(array('nome' =>'Aventura'));
        Genero::create(array('nome' =>'Chanchada'));
        Genero::create(array('nome' =>'Cinema catástrofe'));
        Genero::create(array('nome' =>'Comédia'));
        Genero::create(array('nome' =>'Comédia romântica'));
        Genero::create(array('nome' =>'Comédia dramática'));
        Genero::create(array('nome' =>'Comédia de ação'));
        Genero::create(array('nome' =>'Cult'));
        Genero::create(array('nome' =>'Dança'));
        Genero::create(array('nome' =>'Documentários'));
        Genero::create(array('nome' =>'Drama'));
        Genero::create(array('nome' =>'Espionagem'));
        Genero::create(array('nome' =>'Erótico'));
        Genero::create(array('nome' =>'Fantasia'));
        Genero::create(array('nome' =>'Faroeste'));
        Genero::create(array('nome' =>'Ficção científica'));
        Genero::create(array('nome' =>'Franchise/Séries'));
        Genero::create(array('nome' =>'Guerra'));
        Genero::create(array('nome' =>'Machinima'));
        Genero::create(array('nome' =>'Masala'));
        Genero::create(array('nome' =>'Musical'));
        Genero::create(array('nome' =>'Filme noir'));
        Genero::create(array('nome' =>'Policial'));
        Genero::create(array('nome' =>'Pornochanchada'));
        Genero::create(array('nome' =>'Pornográfico'));
        Genero::create(array('nome' =>'Romance'));
        Genero::create(array('nome' =>'Suspense'));
        Genero::create(array('nome' =>'Terror'));
        Genero::create(array('nome' =>'Trash'));
    }
}