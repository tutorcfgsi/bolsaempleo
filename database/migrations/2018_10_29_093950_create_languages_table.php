<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLanguagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('languages', function (Blueprint $table) {
            $table->increments('id');
            $table->string('idioma');
            $table->string('nivel_hablado');
            $table->string('nivel_escrito');
            $table->string('titulo_oficial')->nullable();            
            // Creamos la columna que hará de clave foránea
            $table->unsignedInteger('id_user');  
            // Indicamos a qué campo de qué tabla apunta la clave foránea
            $table->foreign('id_user')->references('id')->on('users'); 
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('languages');
    }
}
