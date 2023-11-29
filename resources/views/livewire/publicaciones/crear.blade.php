<div>
    <x-button positive icon="plus-circle" wire:click="$set('modal', true)" label="Nuevo" />
    <form wire:submit.prevent="guardar">
        @csrf
        <x-modal.card title="Nueva Publicación" blur wire:model="modal">
            <x-errors class="mb-4"/>
            <div class="mb-4">
                <x-select
                    label="Categoría"
                    wire:model="categoria"
                    placeholder="Seleccione una categoría"
                    :async-data="route('api.categoria.index')"
                    option-label="nombre"
                    option-value="id"
                />
            </div>
            <div class="mb-4">
                <x-select
                    label="Tipo Publicación"
                    wire:model="tipoPublicacion"
                    placeholder="Seleccione un tipo"
                    :async-data="route('api.tipo.publicacion.index')"
                    option-label="nombre"
                    option-value="id"
                />
            </div>
            <div class="mb-4">
                <x-input wire:model="path" label="Ruta" corner-hint="Ejemplo: reunion-apoderados-agosto" placeholder="Ingrese la ruta" />
            </div>
            <div class="mb-4">
                <x-input wire:model="nombre" label="Nombre" placeholder="Ingrese el nombre" />
            </div>
            <div class="mb-4">
                <x-input wire:model="descripcion" label="Descripción" placeholder="Ingrese la descripción"/>
            </div>
            <div class="mb-4">
                <x-textarea wire:model="detalle" label="Detalle" placeholder="Ingrese una descripción"/>
            </div>
            @if ($tipoPublicacion != 1)                
                <div class="mb-4">
                    <input wire:model="fotos" type="file" multiple>
                </div>
            @endif
            <x-slot name="footer">
                <x-button primary type="submit">
                    Guardar
                </x-button>
                <x-button secondary wire:click="$set('modal', false)">
                    Cerrar
                </x-button>
            </x-slot>
        </x-modal.card>     
    </form>
</div>
