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

       return redirect('/');

    }

    public function edit($id){

       
        $nvaPropiedad = Propiedad::find($id);
        return view('edit', compact('nvaPropiedad'));
    }

    public function update(request $req, $id){

        $propiedad = Propiedad::find($id);
        $propiedad->color = $req->input('color');
        $propiedad->metros = $req->input('metros');
        $propiedad->tipoPropiedad = $req->input('tipo');
        $propiedad->costoxmetro = $req->input('costoxmetro');
        $propiedad->codigoDuenio = $req->input('codigoDuenio');
        $propiedad->domicilio = $req->input('domicilio');

        $propiedad->save();

        return redirect('/');
        
    }

    
    public function delete($id){

      
        $nvaPropiedad = Propiedad::find($id);
    }
}
