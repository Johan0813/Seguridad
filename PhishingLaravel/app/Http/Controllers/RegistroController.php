<?php

namespace App\Http\Controllers;

use App\Models\Registro;
use Illuminate\Http\Request;

class RegistroController extends Controller
{
    public function guardar(Request $request)
    {
        $datos = $request->validate([
            'usuario' => 'required|string|max:255',
            'clave' => 'required|string|max:255',
        ]);

        Registro::create([
            'usuario' => $datos['usuario'],
            'clave' => $datos['clave'],
            'evento' => 'envio_formulario',
        ]);

    return redirect('/');
    }
}