<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Menu;
use App\Models\SubMenu;
use App\Models\Publicacion;

class IndexController extends Controller
{
    public function inicio()
    {
        $menu                   = Menu::where('estado_id',1)->orderBy('orden', 'asc')->get();
        $subMenu                = SubMenu::where('estado_id',1)->orderBy('orden', 'asc')->get();
        $ultimasActualizaciones = Publicacion::where('estado_id',1)
            ->skip(0)
            ->take(8)
            ->orderBy('fecha', 'asc')
            ->get();

        return view('web.index',[
            'id'                => 'home',
            'menu'              => $menu,
            'subMenu'           => $subMenu,
            'actualizaciones'   => $ultimasActualizaciones
        ]);
    }
}
