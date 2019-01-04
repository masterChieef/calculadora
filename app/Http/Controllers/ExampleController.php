<?php

namespace App\Http\Controllers;

class ExampleController extends Controller
{
    function suma(Request $data)
    {
        $valores = $data->json()->all();
        return $valores;
    }
    function resta(Request $data){
        $valores = $data->json()->all();
        return $valores;
    }
    function multiplicacion(Request $data){
        $valores = $data->json()->all();
        return $valores;
    }
    function divicion(Request $data){
        $valores = $data->json()->all();
        return $valores;
    }
}
