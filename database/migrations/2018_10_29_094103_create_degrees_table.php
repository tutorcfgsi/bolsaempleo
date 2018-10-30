<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDegreesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('degrees', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre');
            $table->timestamps();
        });

        DB::table('degrees')->insert([
            'nombre'=> 'ESO',
        ]);
        DB::table('degrees')->insert([
            'nombre'=> 'Bachillerato',
        ]);
        DB::table('degrees')->insert([
            'nombre'=> 'FP Basica',
        ]);
        DB::table('degrees')->insert([
            'nombre'=> 'Ciclo Formativo',
        ]);
        DB::table('degrees')->insert([
            'nombre'=> 'Carrera',
        ]);
        DB::table('degrees')->insert([
            'nombre'=> 'Master',
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('degrees');
    }
}
