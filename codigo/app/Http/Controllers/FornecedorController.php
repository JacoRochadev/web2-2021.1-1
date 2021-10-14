<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Fornecedor;
class FornecedorController extends Controller
{
    //
    public function index(){
        $fornecedores = Fornecedor::all();
        echo $fornecedores;
    }
    public function create(){
        return view('fornecedores.create'); //passa o objeto
    }
    public function store(Request $request)
    {
        $fornecedores = new Fornecedor();
        $fornecedores->nome = $request->nome;
        $fornecedores->debito = $request->debito;
        $fornecedores->endereco = $request->endereco;
        $fornecedores->save();
        return redirect('index');
    }    

}
