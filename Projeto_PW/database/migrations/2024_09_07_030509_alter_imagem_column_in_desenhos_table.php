<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlterImagemColumnInDesenhosTable extends Migration
{
    public function up()
    {
        Schema::table('desenhos', function (Blueprint $table) {
            $table->binary('imagem')->nullable()->change();
        });
    }

    public function down()
    {
        Schema::table('desenhos', function (Blueprint $table) {
            $table->binary('imagem')->change();
        });
    }
}
