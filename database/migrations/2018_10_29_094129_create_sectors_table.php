<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSectorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sectors', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre');
            $table->timestamps();
        });

        DB::table('sectors')->insert([
            'nombre'=> 'Automoción y transporte',
        ]);
        DB::table('sectors')->insert([
            'nombre'=> 'Químico, farmacéutico y sanitario',
        ]);
        DB::table('sectors')->insert([
            'nombre'=> 'Textil, calzado y confección',
        ]);
        DB::table('sectors')->insert([
            'nombre'=> 'Construcción',
        ]);
        DB::table('sectors')->insert([
            'nombre'=> 'Alimentación y restauración',
        ]);
        DB::table('sectors')->insert([
            'nombre'=> 'Siderurgia, metalurgia, fabricación y comercialización de maquinaria',
        ]);
        DB::table('sectors')->insert([
            'nombre'=> 'Servicios a empresas',
        ]);
        DB::table('sectors')->insert([
            'nombre'=> 'Papel, cartón, artes gráficas, edición',
        ]);
        DB::table('sectors')->insert([
            'nombre'=> 'Servicios recreativos, culturales, ocio',
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sectors');
    }
}
