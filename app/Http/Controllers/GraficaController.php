<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Venta;

class GraficaController extends Controller
{
    public function index(){
        $ventas =  Venta::all();

        $puntos = [];
        foreach ($ventas as $venta) {
            $puntos[] = ['name' => $venta['producto'], 'y' => floatval($venta['cantidad'])];
        }
        return view("home", ["data" => json_encode($puntos)]);
    }
}
