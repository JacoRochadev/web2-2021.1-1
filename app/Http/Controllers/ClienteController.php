<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use Illuminate\Http\Request;

class ClienteController extends Controller
{
    public function show(){
        $clientes = Cliente::all();
        echo $clientes;
    }
}
