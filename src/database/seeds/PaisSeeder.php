<?php
use App\Pais;
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class PaisSeeder extends Seeder
{
    public function run()
    {
        Pais::create(array('nome' =>'EUA'));
        Pais::create(array('nome' =>'Brasil'));
        Pais::create(array('nome' =>'Argentina'));
        Pais::create(array('nome' =>'Japão'));
        Pais::create(array('nome' =>'India'));
        Pais::create(array('nome' =>'Alemanhã'));
        Pais::create(array('nome' =>'Itália'));
        Pais::create(array('nome' =>'Espanha'));
        Pais::create(array('nome' =>'Canada'));
    }
}