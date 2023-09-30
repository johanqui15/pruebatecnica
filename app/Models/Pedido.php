<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pedido extends Model
{
    use HasFactory;
    protected $fillable = [
        'id_cliente', 'id_producto', 'cantidad', 'precio_unitario',
    ];

    // Relación con clientes
    public function cliente()
    {
        return $this->belongsTo('App\Cliente', 'id_cliente');
    }

    // Relación con productos
    public function producto()
    {
        return $this->belongsTo('App\Models\Producto', 'id_producto');
    }
}
