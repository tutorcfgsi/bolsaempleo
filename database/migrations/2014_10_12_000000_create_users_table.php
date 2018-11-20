<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('second_name');
            $table->string('province')->nullable();
            $table->string('city')->nullable();
            $table->string('address')->nullable();
            $table->string('mobile')->nullable();
            $table->date('birthdate')->nullable();
            $table->string('email');
            $table->string('password');
            $table->string('dni')->nullable();
            $table->tinyInteger('vehicle')->default(0);
            $table->tinyInteger('type')->default(0);
            $table->string('photo')->default('defecto.png');
            $table->tinyInteger('confirmed')->default(0);
            $table->string('confirmation_code')->nullable();
            $table->string('current_state')->nullable();
            $table->string('observation')->nullable();
            $table->rememberToken();
            $table->timestamps();
        });

        DB::table('users')->insert([
            'name'=> 'admin',
            'second_name'=> 'admin',
            'province'=> 'cadiz',
            'city'=> 'cadiz',
            'address'=> 'cadiz',
            'mobile'=> '123456789',
            'birthdate'=> '1995-02-03',
            'email'=> 'admin@admin.com',
            'password'=> bcrypt('123456'),
            'dni'=> '12345678A',
            'vehicle'=> 0,
            'type'=>1,
            'photo'=>'admin.png',
            'confirmed'=>1,
            'confirmation_code'=>"",
            'current_state'=>"En paro"
        ]);

        DB::table('users')->insert([
            'name'=> 'prueba',
            'second_name'=> 'prueba',
            'province'=> 'cadiz',
            'city'=> 'cadiz',
            'address'=> 'cadiz',
            'mobile'=> '123456789',
            'birthdate'=> '1995-02-03',
            'email'=> 'prueba@prueba.com',
            'password'=> bcrypt('123456'),
            'dni'=> '12345678A',
            'vehicle'=> 0,
            'type'=>1,
            'photo'=>'admin.png',
            'confirmed'=>1,
            'confirmation_code'=>"",
            'current_state'=>"En paro"
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
