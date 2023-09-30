<div class="flex flex-col">
    <figure class="flex md:flex-row flex-col items-center bg-white border border-gray-700 rounded-xl p-8 space-y-4">    
        <figcaption class="text-black dark:text-black md:w-3/4">
            <div class="font-medium text-lg">Ejercicio SQL</div>
            <blockquote class="text-lg font-medium mt-4">
                • Se realiza la creación de las migraciones de las tablas: Clientes, Pedidos y Productos
                <br><br>
                • Se realiza la creación de seeders y factories para el llenado de las tablas en este ejercicio, se realizaran 100 pedidos, 20 clientes y 200 productos.
                <br><br>
                • Se crean los modelos correspondienes a la tabla
                <br><br>
                • Este componente es livewire o controlador de esta vista 
            </blockquote>
        </figcaption>
    </figure>                
    <br>
    <hr>
    <br>
    <div class="flex flex-wrap">
        <div class="w-full md:w-1/2 p-4">
            <div class="overflow-x-auto">
                <table class="min-w-full bg-white border border-gray-300">
                    <caption class="text-lg font-bold mb-2">Lista Total de Pedidos por Cliente</caption>
                    <thead>
                        <tr>
                            <th class="py-2 px-4 border-b">Cliente</th>
                            <th class="py-2 px-4 border-b">Producto</th>
                            <th class="py-2 px-4 border-b">Cantidad</th>
                            <th class="py-2 px-4 border-b">Precio Unitario</th>
                            <th class="py-2 px-4 border-b">Fecha de pedido</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($clientes as $cliente)
                            @foreach($cliente->pedidos as $pedido)
                                <tr>
                                    @if($loop->first) {{-- Display client name only for the first row --}}
                                        <td class="py-2 px-4 border-b" rowspan="{{ count($cliente->pedidos) }}">{{ $cliente->nombre }}</td>
                                    @endif
                                    <td class="py-2 px-4 border-b">{{ $pedido->producto->nombre_producto }}</td>
                                    <td class="py-2 px-4 border-b">{{ $pedido->cantidad }}</td>
                                    <td class="py-2 px-4 border-b">{{ $pedido->producto->precio_unitario }}</td>
                                    <td class="py-2 px-4 border-b">{{ $pedido->created_at }}</td>
                                </tr>
                            @endforeach
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <div class="w-full md:w-1/2 p-4">
            <div class="overflow-x-auto">
                <table class="min-w-full bg-white border border-gray-300">
                    <caption class="text-lg font-bold mb-2">Consulta de Pedidos</caption>
                    <thead>
                        <tr>
                            <th class="py-2 px-4 border-b">Nombre del Cliente</th>
                            <th class="py-2 px-4 border-b">Nombre del Producto</th>
                            <th class="py-2 px-4 border-b">Fecha de pedido</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($consulta as $consult)
                            <tr>
                                <td class="py-2 px-4 border-b">{{ $consult->nombre_cliente }}</td>
                                <td class="py-2 px-4 border-b">{{ $consult->nombre_producto }}</td>
                                <td class="py-2 px-4 border-b">{{ $consult->created_at }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>            
        </div>
    
</div>
