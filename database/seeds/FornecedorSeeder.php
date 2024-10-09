<?php

use App\Fornecedor;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FornecedorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $fornecedor = new Fornecedor();
        $fornecedor->nome = 'Fornecedor 1';
        $fornecedor->email = 'fornecedor1@gmail.com';
        $fornecedor->site = 'fornecedor1.com';
        $fornecedor->uf = 'SC';
        $fornecedor->save();

        Fornecedor::create([
            'nome' => 'Fornecedor 2',
            'email' => 'fornecedor2@gmail.com',
            'site' => 'fornecedor2.com',
            'uf' => 'SP',
        ]);

        DB::table('fornecedores')->insert([
            'nome' => 'Fornecedor 3',
            'email' => 'fornecedor3@gmail.com',
            'site' => 'fornecedor3.com',
            'uf' => 'CE',
        ]);
    }
}
