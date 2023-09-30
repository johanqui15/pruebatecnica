<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\DB;
use App\Models\Cliente;
use App\Models\Pedido;
use App\Models\Producto;
class Ejerciciosql extends Component
{
    public function render()
    {
        $clientes = Cliente::all();
        $pedido = Pedido::all();
        $productos = Producto::all();
        $consulta = DB::select("SELECT  clientes.nombre as nombre_cliente,
                                        productos.nombre_producto,
                                        pedidos.created_at
                                FROM pedidos 
                                INNER JOIN productos ON pedidos.id_producto = productos.id
                                INNER JOIN clientes ON pedidos.id_cliente = clientes.id
                                WHERE pedidos.created_at BETWEEN NOW() - INTERVAL 30 DAY AND NOW()
                                ");
        return view('livewire.ejerciciosql', compact('consulta','clientes','pedido','productos'));
    }
}
