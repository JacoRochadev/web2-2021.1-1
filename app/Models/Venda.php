<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Venda extends Model
{
    use HasFactory;
    protected $table = "vendas";
    protected $fillable =[
        'id_caixa',
        'id_cliente',
        'num_parcelas',
        'valor_total'
    ];

    public function relCliente()
    {
        return $this->hasOne('App\Cliente', 'id', 'id_cliente');
    }
    public function relItensVenda()
    {
        return $this->hasMany(ItemVenda::class);
    }
}
