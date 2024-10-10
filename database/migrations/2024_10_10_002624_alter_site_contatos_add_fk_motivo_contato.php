<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class AlterSiteContatosAddFkMotivoContato extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('site_contatos', function (Blueprint $table) {
            $table->unsignedBigInteger('motivo_contato_id')->after('email');
        });

        DB::statement('UPDATE site_contatos  SET motivo_contato_id = motivo;');

        Schema::table('site_contatos', function (Blueprint $table) {
            $table->dropColumn('motivo');
            $table->foreign('motivo_contato_id')->references('id')->on('motivo_contatos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('site_contatos', function (Blueprint $table) {
            $table->integer('motivo')->after('email');
        });

        DB::statement('UPDATE site_contatos  SET motivo = motivo_contato_id;');

        Schema::table('site_contatos', function (Blueprint $table) {
            $table->dropForeign('site_contatos_motivo_contato_id_foreign')->references('id')->on('motivo_contatos');

            $table->dropColumn('motivo_contato_id');
        });
    }
}
