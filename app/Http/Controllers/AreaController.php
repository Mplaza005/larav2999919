<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AreaController extends Controller
{

    public function area_triangulo($base,$altura){

        $area=($base*$altura)/2;

        return $area;

    }


    public function area_circulo(){

        return"hola desde area circulo..";
    }

    public function cuadratica(){

        return"hola desde cuadratica..";
    }


}
