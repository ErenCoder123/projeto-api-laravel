<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClienteController extends Controller
{
    public function listar()
    {
        $array = [
            "nome" => "Nome teste",
            "idade" => 24
        ];

        return response()->json($array, 200);
    }
}

