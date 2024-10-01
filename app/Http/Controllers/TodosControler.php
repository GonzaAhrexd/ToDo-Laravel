<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TodosControler extends Controller
{
    // index mostrar elementos
    // store guardar
    // update actualizar
    // destroy para eliminar
    // edit para mostrar el formulario de edición

    public function store(Request $request){
        $request -> validate([
            'title' => 'required|'
        ])
    }
}
