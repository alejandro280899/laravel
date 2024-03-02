<?php

namespace App\Http\Controllers;

use App\Models\Primenumber;
use Illuminate\Http\Request;

class PrimernumberController extends Controller
{
    public function formularioPrimo()
    {
        return view('ingresar_numero');
    }

    public function primoStore(Request $request)
    {
        $modelPrimo = new Primenumber();
        $numero = $request->input('numero');
        $modelPrimo ->numero = $numero;
        $esPrimo = $this->esPrimo($numero);
        if ($esPrimo){
            $modelPrimo->calificacion = "es primo";
        }else{
            $modelPrimo->calificacion = "no es primo";
        }
        $modelPrimo-> save();

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

