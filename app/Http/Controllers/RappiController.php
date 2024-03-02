<?php

namespace App\Http\Controllers;

use App\Models\Rappi;
use Illuminate\Http\Request;

class RappiController extends Controller
{
    public function formularioRappi(){
        return view("formularioRappi");
    }

    public function rappiStore(Request $request){
        $producto = new Rappi();
        $producto->name=$request->name;
        $producto->price=$request->price;
        $producto->save();
        return $producto;
     }
}

