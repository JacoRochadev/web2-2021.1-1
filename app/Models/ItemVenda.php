<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ItemVenda extends Model
{
    use HasFactory;
    protected $table = "itens_venda";
    protected $fillable =[
        'id_produto',
        'id_venda',
        'quantidade',
        'valor_unitario'
    ];

    public function relVenda()
    {
        return $this->belongsTo(Venda::class);
    }
}
