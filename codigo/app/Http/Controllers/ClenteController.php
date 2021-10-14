<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cliente;

class ClenteController extends Controller
{
    //
    public function index()
    {
        $clientes = Cliente::all();
        return view('clientes.index', ['clientes'=>$clientes]); //passa o objeto
    }
    public function create()
    {
        return view('clientes.create'); //passa o objeto
    }
    public function store(Request $request)
    {
        $clientes = new Cliente();
        $clientes->nome = $request->nome;
        $clientes->debito = $request->debito;
        $clientes->endereco = $request->endereco;
        $clientes->save();
        return redirect('index');
    }

}
