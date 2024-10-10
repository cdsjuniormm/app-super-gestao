<?php

use App\MotivoContato;
use Illuminate\Database\Seeder;

class MotivoContatoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        MotivoContato::create(['nome' => 'Dúvida']);
        MotivoContato::create(['nome' => 'Elogio']);
        MotivoContato::create(['nome' => 'Reclamação']);
    }
}
