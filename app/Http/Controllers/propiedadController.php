<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use  App\Models\Propiedad;


class propiedadController extends Controller
{
 
    //metodo para devolver la vista principal
    function index(){

        //devuelve todos los registros de la vase de datos
        $propiedades = propiedad:: all(); 
        return view('home', compact('propiedades'));
    }

    public function create(){


        return view('crear');
    }

    // el objeto Request recibe los datos del formulario
    public function store(Request $req){

        $nvaPropiedad = new Propiedad();
        $nvaPropiedad->color = $req->input('color');
        $nvaPropiedad->metros = $req->input('metros');
        $nvaPropiedad->tipoPropiedad = $req->input('tipo');
        $nvaPropiedad->costoxmetro = $req->input('costoxmetro');
        $nvaPropiedad->codigoDuenio = $req->input('codigoDuenio');
        $nvaPropiedad->domicilio = $req->input('domicilio');

        
        $nvaPropiedad->save();

       return $this->index();

    }
}
