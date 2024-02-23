<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up(){
    Schema::create('users', function (Blueprint $table) {
        // Agrega una columna autoincremental llamada "id"
        $table->id();

        // Agrega una columna de tipo 'string' llamada "name"
        $table->string('name');

        // Agrega una columna de tipo 'string' llamada "email" y establece la restricción de unicidad
        $table->string('email')->unique();

        // Agrega una columna de tipo 'timestamp' llamada "email_verified_at" que puede ser nula
        $table->timestamp('email_verified_at')->nullable();

        // Agrega una columna de tipo 'string' llamada "password"
        $table->string('password');

        // Agrega una columna llamada "remember_token"
        $table->rememberToken();

        // Agrega dos columnas de tipo 'timestamp' llamadas "created_at" y "updated_at"
        //. Estas columnas se utilizan para mantener la marca de tiempo de cuándo se creó 
        // y actualizó cada registro en la tabla, respectivamente.
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
        Schema::dropIfExists('users');
    }
}
