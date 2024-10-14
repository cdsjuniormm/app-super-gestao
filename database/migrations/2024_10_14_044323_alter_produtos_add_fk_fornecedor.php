<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class AlterProdutosAddFkFornecedor extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('produtos', function (Blueprint $table) {
            $fornecedorId = DB::table('fornecedores')
                ->insert([
                    'nome' => 'Fornecedor Padrão',
                    'email' => 'fornecedorpadrao@gmail.com',
                    'site' => 'fornecedorpadrao.com.br',
                    'uf' => 'RJ'
                ]);

            $table->unsignedBigInteger('fornecedor_id')
                ->default($fornecedorId)
                ->after('id');

            $table->foreign('fornecedor_id')
                ->references('id')
                ->on('fornecedores');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('produtos', function (Blueprint $table) {
            $table->dropForeign('produtos_fornecedor_id_foreign');
            $table->dropColumn('fornecedor_id');
        });
    }
}
