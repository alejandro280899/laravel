<?php

namespace App\Http\Controllers;

use App\Models\Cuadratica;
use Illuminate\Http\Request;

class CuadraticaController extends Controller
{
    public function formularioCuadratica(){
        return view('formularioCuadratica');
    }
    public function raiz(Request $request)
    {
        $modelCuadratica = new Cuadratica();
        $request->validate([
            'a' => 'required|numeric',
            'b' => 'required|numeric',
            'c' => 'required|numeric',
        ]);


        $a = $request->a;
        $b = $request->b;
        $c = $request->c;

        $modelCuadratica->valora = $a;
        $modelCuadratica->valorb = $b;
        $modelCuadratica->valorc = $c;

        $discriminante = $b**2 - 4*$a*$c;


        if ($discriminante < 0) {
            return "Las raíces de la ecuación cuadrática son complejas.";
        }


        $raiz1 = (-$b + sqrt($discriminante)) / (2*$a);
        $raiz2 = (-$b - sqrt($discriminante)) / (2*$a);

        $modelCuadratica->raiz1 = $raiz1;
        $modelCuadratica->raiz2 = $raiz2;
        $modelCuadratica->save();

        return "Las raíces de la ecuación cuadrática son: $raiz1, $raiz2";
    }
}
