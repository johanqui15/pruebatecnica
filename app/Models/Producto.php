<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    use HasFactory;
    protected $fillable = [
        'nombre_producto', 'precio_unitario',
    ];

    // Relación con pedidos
    public function pedidos()
    {
        return $this->hasMany('App\Pedido');
    }
}
