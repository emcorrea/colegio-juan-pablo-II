<x-app-layout>
   <x-slot name="header">
       <h2 class="font-semibold text-xl text-gray-800 leading-tight">
           {{ __('Colegio Juan Pablo II') }}
       </h2>
   </x-slot>

   <div class="py-12">
      <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
         <div class="relative overflow-x-auto">
            <div class="mt-4 flex justify-between">
                  <div>
                     <a href="{{ route('mantenedores.publicaciones.create') }}" type="button" class="px-3 py-2 text-sm font-medium text-center text-white bg-green-700 rounded-lg hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-green-300 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800"><i class="fas fa-plus"></i> Nueva Publicación</a>
                  </div>
            </div>
            <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400 mt-4" style="font-size: 13px">
                  <thead class="text-xs text-white uppercase bg-gray-700 dark:bg-gray-700 dark:text-gray-400">
                     <tr>
                        <th scope="col" class="px-6 py-3">
                           Folio
                        </th>
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
                        <form action="{{ route('mantenedores.publicaciones.destroy', ['id' => $publicacion->id ]) }}" method="POST" id="form-{{ $publicacion->id }}">
                           @csrf
                        </form>    
                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                              <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                 #{{ $publicacion->id }}
                              </th>
                              <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                 {{ $publicacion->categoria }}
                              </th>
                              <td class="px-6 py-4">
                                 {{ $publicacion->nombre }}
                              </td>
                              <td class="px-6 py-4">
                                 {{ $publicacion->fecha }}
                              </td>
                              <td>
                                 <a href="{{ route('mantenedores.publicaciones.edit',['id' => $publicacion->id]) }}"><i class="fas fa-edit text-amber-400 mx-2" style="cursor: pointer; font-size:15px" title="Editar"></i></a>
                                 <i class="fas fa-trash-alt text-red-600" style="cursor: pointer; font-size:15px" title="Eliminar" onclick="confirmarDelete({{ $publicacion->id }})"></i>
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
   </div>
</x-app-layout>