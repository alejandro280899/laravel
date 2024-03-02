<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PrimoController extends Controller
{
    public function mostrarFormulario()
    {
        return view('ingresar_numero');
    }

    public function verificarPrimo(Request $request)
    {
        $numero = $request->input('numero');
        $esPrimo = $this->esPrimo($numero);

        return view('resultado_primo', ['numero' => $numero, 'esPrimo' => $esPrimo]);
    }

    private function esPrimo($numero)
    {
        if ($numero <= 1) {
            return false;
        }
        for ($i = 2; $i <= sqrt($numero); $i++) {
            if ($numero % $i == 0) {
                return false;
            }
        }
        return true;
    }
}
