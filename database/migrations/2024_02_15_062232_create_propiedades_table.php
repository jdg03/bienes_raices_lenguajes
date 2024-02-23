<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePropiedadesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
{
    // Crea una nueva tabla llamada "propiedades" utilizando el objeto Schema
    Schema::create('propiedades', function (Blueprint $table) {

        // Agrega una columna autoincremental llamada "codigoPropiedad"
        $table->id('codigoPropiedad');

        // Agrega una columna de tipo 'string' llamada "color" con una longitud máxima de 30 caracteres
        $table->string('color', 30);

        // Agrega una columna de tipo 'string' llamada "metros" para almacenar la medida de la propiedad
        $table->string('metros');

        // Agrega una columna de tipo 'string' llamada "tipoPropiedad" con una longitud máxima de 50 caracteres
        $table->string('tipoPropiedad', 50);

        // Agrega una columna de tipo 'double' llamada "costoxmetro" con un valor predeterminado de 100.0
        // El primer argumento especifica la cantidad máxima de dígitos permitidos, mientras que el segundo argumento
        // especifica la cantidad máxima de dígitos después del punto decimal.
        $table->double('costoxmetro', 12, 2)->default(100.0);

        // Agrega una columna de tipo 'integer' llamada "codigoDuenio" para almacenar el código del dueño de la propiedad
        $table->integer('codigoDuenio');

        // Agrega dos columnas de tipo 'timestamp' llamadas "created_at" y "updated_at" para mantener la marca de tiempo de creación y actualización
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
        Schema::dropIfExists('propiedades');
    }
}
