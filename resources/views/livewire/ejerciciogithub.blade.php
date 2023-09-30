<div>
    <div>
        <h2 class="text-xl font-bold mb-2">Los mejores 10 repositorios de GITHUB por cantidad de estrellas</h2>
        <div class="overflow-x-auto">
            <table class="min-w-full bg-white border border-gray-300">
                <thead>
                    <tr>
                        <th class="py-2 px-4 border-b">ID del repositorio</th>
                        <th class="py-2 px-4 border-b">Nombre del repositorio</th>
                        <th class="py-2 px-4 border-b">Dueño del repositorio</th>
                        <th class="py-2 px-4 border-b">Titulo del repositorio</th>
                        <th class="py-2 px-4 border-b">Estrellas del repositorio</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($repos as $repo)
                        <tr>
                            <td class="py-2 px-4 border-b">{{ $repo['id'] }}</td>
                            <td class="py-2 px-4 border-b">{{ $repo['name'] }}</td>
                            <td class="py-2 px-4 border-b">{{ $repo['owner']['login'] }}</td>
                            <td class="py-2 px-4 border-b">{{ $repo['full_name'] }}</td>
                            <td class="py-2 px-4 border-b">{{ $repo['stargazers_count'] }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>    
</div>
