<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMotivoContatosTable extends Migration
{
    //Criação da tabela motivocontatos no banco
    public function up()
    {
        Schema::create('motivo_contatos', function (Blueprint $table) {
            $table->id();
            $table->string('motivo_contato', 20 );
            $table->timestamps();
        });
    }

    
    public function down()
    {
        Schema::dropIfExists('motivo_contatos');
    }
}
