<?php

use App\SiteContato;
use Illuminate\Database\Seeder;

class SiteContatoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $contato = new SiteContato();
        $contato->nome = 'Sistema SG';
        $contato->telefone = '47 98888-8888';
        $contato->email = 'sistemasg@gmail.com';
        $contato->motivo = 1;
        $contato->Mensagem = 'Super Gestão';
        $contato->save();
    }
}
