<?php

namespace App\Http\Livewire\Publicaciones;

use App\Models\Publicacion;
use Livewire\Component;

class ListadoPublicaciones extends Component
{
    public $buscar;
    public $cantidadRegistro = 10;
    protected $listeners = ['renderizarListado' => 'render'];

    public function render()
    {
        $publicaciones = Publicacion::where('estado_id',1)
            ->when($this->buscar, function($query) {
                $query->where('nombre', 'like', '%'. $this->buscar .'%');
            })
            ->orderBy('id','desc')
            ->paginate($this->cantidadRegistro, pageName:'pagina');

        return view('livewire.publicaciones.listado-publicaciones',compact('publicaciones'));
    }
}
