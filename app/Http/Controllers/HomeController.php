<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Venta;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index() 
    {
        $ventas =  Venta::all();

        $puntos = [];
        foreach ($ventas as $venta) {
            $puntos[] = ['name' => $venta['producto'], 'y' => floatval($venta['cantidad'])];
        }
        return view("home", ["data" => json_encode($puntos)]);
    }
}
