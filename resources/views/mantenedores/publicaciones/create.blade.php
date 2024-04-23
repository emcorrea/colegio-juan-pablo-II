<x-app-layout>
   <x-slot name="header">
      <h2 class="font-semibold text-xl text-gray-800 leading-tight">
         {{ __('Colegio Juan Pablo II') }}
      </h2>
   </x-slot>

   <div class="py-12">
      <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
         <section class="bg-white dark:bg-gray-900">
            <div class="py-8 px-4 mx-auto max-w-2xl lg:py-16">
               <h2 class="mb-4 text-xl font-bold text-gray-500 dark:text-white border-b-2 border-slate-300">Agregar nueva Publicación</h2>
               <form action="{{ route('mantenedores.publicaciones.store') }}" method="POST" enctype="multipart/form-data">
                  @csrf
                  <div class="grid gap-4 sm:grid-cols-2 sm:gap-6">
                     <div class="sm:col-span-2">
                        <label for="nombre" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nombre</label>
                        <input type="text" name="nombre" id="nombre" value="{{ old('nombre') }}" class="@error('nombre') border-red-500 @enderror bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Nombre Publicación">
                        @error('nombre')
                           <p class="mt-2 text-sm text-red-600 dark:text-red-500">{{ $message }}</p>
                        @enderror
                     </div>
                     <div class="sm:col-span-2">
                        <label for="descripcion" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Descripción</label>
                        <input type="text" name="descripcion" id="descripcion" value="{{ old('descripcion') }}" class="@error('nombre') border-red-500 @enderror bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Descripción breve">
                        @error('descripcion')
                           <p class="mt-2 text-sm text-red-600 dark:text-red-500">{{ $message }}</p>
                        @enderror
                     </div>
                     <div class="sm:col-span-2">
                        <label for="categoria" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Categoría</label>
                        <select id="categoria" name="categoria" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                           <option value="0" selected="">Seleccione</option>
                           @foreach ($categorias as $categoria) 
                              <option value="{{ $categoria->id }}">{{ $categoria->nombre }}</option>
                           @endforeach
                        </select>
                     </div>
                     <div class="sm:col-span-2">
                        <label for="tipo" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tipo</label>
                        <select id="tipo" name="tipo" onchange="inputFile(this.value)" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                           <option value="0" selected="">Seleccione</option>
                           @foreach ($tiposPublicacion as $tipoPublicacion)
                              <option value="{{ $tipoPublicacion->id }}">{{ $tipoPublicacion->nombre }}</option>
                           @endforeach
                        </select>
                     </div>
                     <div class="sm:col-span-2 hidden" id="elemento-file">
                        <label for="archivos" class="flex flex-col items-center justify-center w-full h-64 border-2 border-gray-300 border-dashed rounded-lg cursor-pointer bg-gray-50 dark:hover:bg-bray-800 dark:bg-gray-700 hover:bg-gray-100 dark:border-gray-600 dark:hover:border-gray-500 dark:hover:bg-gray-600">
                           <div class="flex flex-col items-center justify-center pt-5 pb-6">
                              <svg class="w-8 h-8 mb-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 16">
                                 <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 13h3a3 3 0 0 0 0-6h-.025A5.56 5.56 0 0 0 16 6.5 5.5 5.5 0 0 0 5.207 5.021C5.137 5.017 5.071 5 5 5a4 4 0 0 0 0 8h2.167M10 15V6m0 0L8 8m2-2 2 2"/>
                              </svg>
                              <p class="mb-2 text-sm text-gray-500 dark:text-gray-400"><span class="font-semibold">Click to upload</span> or drag and drop</p>
                              <p class="text-xs text-gray-500 dark:text-gray-400">SVG, PNG, JPG or GIF (MAX. 800x400px)</p>
                           </div>
                           <input id="archivos" name="archivos[]" type="file" multiple class="hidden" />
                        </label>
                    </div> 
                     <div class="sm:col-span-2">
                        <label for="contenido" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Contenido</label>
                        <textarea id="contenido" name="contenido" value="{{ old('contenido') }}" rows="8" class="@error('nombre') border-red-500 @enderror block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Escriba el contenido de la publicación"></textarea>
                        @error('contenido')
                           <p class="mt-2 text-sm text-red-600 dark:text-red-500">{{ $message }}</p>
                        @enderror
                     </div>

                  </div>
                  <button type="submit" class="my-3 px-3 py-2 text-sm font-medium text-center text-white bg-green-700 rounded-lg hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-green-300 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800"><i class="fas fa-save"></i> Guardar</button>
               </form>
            </div>
          </section>
      </div>
   </div>
</x-app-layout>
