<?php

namespace App\Http\Controllers;

use App\Models\Registro;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class RegistroController extends Controller
{
    
    public function create(){
        return view('registros.create');
    }

    public function store(Request $request){
        $registro = new Registro();

        $registro->Nombre = $request->nombre;
        $registro->Apellido = $request->apellidos;
        $registro->Correo = $request->correo;
        $registro->Telefono = $request->telefono;
        $registro->Boucher = Storage::url($request->file('boucher')->store('public'));

        $registro->save();

        return redirect('/');

    }
    

    public function show(){
        if(auth()->user()){
            $registros = Registro::all();

            return view('registros.show', compact('registros'));
        }else{
            return redirect('/login');
        }
    }
}
