<?php

namespace App\Http\Livewire\Publicaciones;

use App\Models\Categoria;
use App\Models\Publicacion;
use App\Models\PublicacionDetalle;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\WithFileUploads;
use WireUi\Traits\Actions;

class Crear extends Component
{
    use Actions;
    use WithFileUploads;
    public $modal = false;
    public $user;
    public $fechaActual;
    public $categoria, $tipoPublicacion = 1, $path, $nombre, $descripcion, $detalle, $fotos = [];

    public function render()
    {
        return view('livewire.publicaciones.crear');
    }

    public function mount()
    {
        $this->user = Auth::user();
        $this->fechaActual = Carbon::now();
    }

    public function guardar()
    {
        $this->validate([
            'categoria'     => 'required',
            'path'          => 'required',
            'nombre'        => 'required',
            'descripcion'   => 'required',
            'detalle'       => 'required'
        ]);

        $categoria = Categoria::find($this->categoria);

        $publicacion = Publicacion::create([
            'nombre'        => $this->nombre,
            'descripcion'   => $this->descripcion,
            'fecha'         => $this->fechaActual->format('Y-m-d H:i:s'),
            'importante'    => 0,
            'path'          => $categoria->nombre.'.'.$this->path,
            'categoria_id'  => $this->categoria,
            'user_id'       => $this->user->id,
            'estado_id'     => 1
        ]);

        PublicacionDetalle::create([
            'contenido'                     => $this->detalle,
            'publicacion_id'                => $publicacion->id,
            'tipo_publicacion_detalle_id'   => 1,
            'estado_id'                     => 1
        ]);

        if ( $this->tipoPublicacion !== 1 ) {

            foreach ($this->fotos as $foto) {
                $archivo = 'storage/'.$foto->store('publicaciones');
    
                PublicacionDetalle::create([
                    'contenido'                     => $archivo,
                    'publicacion_id'                => $publicacion->id,
                    'tipo_publicacion_detalle_id'   => 2,
                    'estado_id'                     => 1
                ]);
            }
        }

        $this->resetValidation();
        $this->reset(['categoria','path','nombre','descripcion','detalle','fotos','modal']);
        $this->emit('renderizarListado');
        
        $this->notification([
            'title'         => 'Perfecto',
            'description'   => 'Publicación creada correctamente',
            'icon'          => 'success'
        ]);
    }

}
