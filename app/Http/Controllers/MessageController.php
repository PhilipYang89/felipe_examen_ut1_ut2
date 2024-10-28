<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MessageController extends Controller
{
    public function save(Request $request) {

        $request->validate([
            'mensaje' => 'required|max:300|not_regex:/^[0-9]+$/',
        ], [
            'mensaje.required' => 'El mensaje es obligatorio!',
            'mensaje.max' => 'El mensaje no debería tener más de 300 caracteres.',
            'mensaje.not_regex' => 'El mensaje no puede solamente tener números',
        ]);

        $mensaje = $request->input('mensaje');

        return view ('mensajes.mostrar');
    }
}
