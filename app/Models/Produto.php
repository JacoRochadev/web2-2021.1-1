<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    use HasFactory;
    protected $table = "produtos";
    protected $fillable =[
        'id_categoria',
        'nome_produto',
        'ipi',
        'frete',
        'preco_na_fabrica',
        'preco_compra',
        'preco_venda',
        'lucro',
        'quantidade'
    ];
}
