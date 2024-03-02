<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NotasController extends Controller
{
    // Muestra el formulario para ingresar las notas
    public function mostrarFormulario()
    {
        return view('ingresar_notas');
    }

    // Procesa las notas ingresadas y calcula el promedio
    public function calcularPromedio(Request $request)
    {
        $validatedData = $request->validate([
            'nota1' => 'required|numeric|min:0|max:10',
            'nota2' => 'required|numeric|min:0|max:10',
            'nota3' => 'required|numeric|min:0|max:10',
        ]);

        $promedio = ($validatedData['nota1'] + $validatedData['nota2'] + $validatedData['nota3']) / 3;

        return view('resultado_promedio', ['promedio' => $promedio]);
    }
}
