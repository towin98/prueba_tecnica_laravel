<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsuariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuarios', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_rol');
            $table->string('nombre', 191);
            $table->string('apellido', 191);
            $table->string('email',191)->unique();
            $table->string('telefono', 191);
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->date('ultimaSesion')->nullable();
            $table->rememberToken();
            $table->timestamps();

            $table->foreign('id_rol')->references('id')->on('roles')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('usuarios');
    }
}
