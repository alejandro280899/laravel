<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NumerosAmigosController extends Controller
{
    public function mostrarFormulario()
    {
        return view('ingresar_numeros');
    }

    public function verificarAmigos(Request $request)
    {
        $numero1 = $request->input('numero1');
        $numero2 = $request->input('numero2');

        $sumaDivisoresNumero1 = $this->sumaDivisores($numero1);
        $sumaDivisoresNumero2 = $this->sumaDivisores($numero2);

        $sonAmigos = ($sumaDivisoresNumero1 == $numero2 && $sumaDivisoresNumero2 == $numero1);

        return view('resultado_amigos', ['numero1' => $numero1, 'numero2' => $numero2, 'sonAmigos' => $sonAmigos]);
    }

    private function sumaDivisores($numero)
    {
        $suma = 0;
        for ($i = 1; $i < $numero; $i++) {
            if ($numero % $i == 0) {
                $suma += $i;
            }
        }
        return $suma;
    }
}
