<div>
    @livewire('publicaciones.crear')
    <div class="relative overflow-x-auto">
        <div class="mt-4 flex justify-between">
            <div>
                <select wire:model="cantidadRegistro">
                    <option value="10" selected>10</option>
                    <option value="25">25</option>
                    <option value="50">50</option>
                    <option value="100">100</option>
                </select>
            </div>
            <div>
                <x-input icon="search" placeholder="Buscar" class="w-40" wire:model="buscar" />
            </div>
        </div>
        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400 mt-4" style="font-size: 13px">
            <thead class="text-xs text-white uppercase bg-gray-700 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        Categoria
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Nombre
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Fecha
                    </th>
                    <th scope="col" class="px-6 py-3">
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($publicaciones as $publicacion)    
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            {{ $publicacion->categoria->nombre }}
                        </th>
                        <td class="px-6 py-4">
                            {{ $publicacion->nombre }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $publicacion->fecha }}
                        </td>
                        <td>
                            <x-button warning icon="pencil-alt"/>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <div class="mt-4">
            {{ $publicaciones->links() }}
        </div>
    </div>
</div>
