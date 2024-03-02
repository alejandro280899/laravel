<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

/*class Cursocontroller extends Controller
{
    public function hola($num1,$num2 ){
        return $num1+$num2;
    }
}*/
class cursocontroller extends Controller{

public function create(){


    return view('formulario');

 }

 public function store(Request $request){

    return $request->num1;

 }
 //primo
 public function esprimo($number){
    $esprimo = true;
    if ($number < 2) {
        $esprimo = false;
    }

    for ($i = 2; $i <= sqrt($number); $i++) {
        if ($number % $i == 0) {
            $esprimo = false;
            break;
        }
    }

    if ($esprimo) {
        return response()->json(["message" => "El número $number es primo."]);
    } else {
        return response()->json(["message" => "El número $number no es primo."]);
    }
}
//numero amigo
 public function handle()
    {
        $limite = $this->argument('limite');
        $this->info("Buscando números amigos hasta $limite");

        for ($i = 1; $i <= $limite; $i++) {
            $sumaDivisores = $this->sumaDivisores($i);

            // Evita la comprobación redundante
            if ($i < $sumaDivisores && $this->sumaDivisores($sumaDivisores) == $i) {
                $this->line("Los números $i y $sumaDivisores son amigos");
            }
        }
    }
 /*private function sumaDivisores($numero)
 {
     $suma = 0;
     for ($i = 1; $i <= $numero / 2; $i++) {
         if ($numero % $i == 0) {
             $suma += $i;
         }
     }
     return $suma;



}*/
}

class NotasController extends Controller{
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

