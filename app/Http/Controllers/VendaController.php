<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use App\Models\FormaPagamento;
use App\Models\ItemVenda;
use App\Models\Produto;
use App\Models\Venda;
use Illuminate\Http\Request;

class VendaController extends Controller
{
    public function __construct(Cliente $cliente, FormaPagamento $forma_pagamento, Produto $produto)
    {
        $this->cliente = $cliente;
        $this->forma_pagamento = $forma_pagamento;
        $this->produto = $produto;
    }
    public function create(){
        return view('venda/venda');
    }
    public function cadastrarVenda(){
        $clientes = $this->cliente->orderBy('nome','ASC')->get();
        $produtos = $this->produto->orderBy('nome_produto','ASC')->get();

        return view('venda/cadastrarVenda', ['clientes' => $clientes, 'produtos' => $produtos]);
    }
    public function store(Request $request)
    {
        $produtoArray = $request->id_produto;
        $quantidadeArray = $request->quantidade;
        $total = 0.0;

        for ($i=0; $i < count($produtoArray); $i++) { 
            $newProduto = Produto::find($produtoArray[$i]);
            $total = $newProduto->preco_venda * $quantidadeArray[$i];
            if ($newProduto->quantidade < $quantidadeArray[$i]) {
                return redirect()->route('venda.cadastrarVenda')->with('error', 'não tem quantidade suficiente no estoque');
            }
        }
        $vendas = new Venda();

        $vendas->id_caixa = 1;//$request->id_caixa;
        $vendas->id_cliente = $request->id_cliente;
        $vendas->num_parcelas = 1;
        $vendas->valor_total += $total;
        $vendas->save();
        for ($i=0; $i < count($produtoArray); $i++) { 
            $newProduto = Produto::find($produtoArray[$i]);
            $itensVenda = new ItemVenda();
            $itensVenda->id_produto = $produtoArray[$i];
            $itensVenda->id_venda = $vendas->id;
            $itensVenda->valor_unitario = $newProduto->preco_venda;
            $itensVenda->quantidade = $quantidadeArray[$i];
            $itensVenda->save();

            
            $newProduto->quantidade -= $quantidadeArray[$i];
            $newProduto->save();
        }

        
        return view('venda/venda');
    }
}
