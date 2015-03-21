<?php
use App\Pais;
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class PaisSeeder extends Seeder
{
    public function run()
    {
        Pais::create(array('nome' =>'eua'));
        Pais::create(array('nome' =>'brasil'));
        Pais::create(array('nome' =>'argentina'));
        Pais::create(array('nome' =>'japão'));
        Pais::create(array('nome' =>'india'));
        Pais::create(array('nome' =>'alemanhã'));
        Pais::create(array('nome' =>'itália'));
        Pais::create(array('nome' =>'espanha'));
        Pais::create(array('nome' =>'canada'));
    }
}