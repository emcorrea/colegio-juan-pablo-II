<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Menu;
use App\Models\SubMenu;
use App\Models\Publicacion;

class MenuController extends Controller
{
    public function cargaMenu($id)
    {
        $publicaciones  = [];
        $menu           = Menu::where('estado_id',1)->orderBy('orden', 'asc')->get();
        $subMenu        = SubMenu::where('estado_id',1)->orderBy('orden', 'asc')->get();
        $menuCargado    = Menu::find($id);
        $contenido      = explode('***',$menuCargado->contenido);

        if($menuCargado->categoria_id){
            $publicaciones = Publicacion::where('categoria_id',$menuCargado->categoria_id)
                ->Where('estado_id',1)
                ->orderBy('fecha','desc')
                ->get();
        }


        return view('web.menu.'.$menuCargado->path.'',[
            'id'            => $id,
            'menu'          => $menu,
            'subMenu'       => $subMenu,
            'menuCargado'   => $menuCargado,
            'contenido'     => $contenido,
            'publicaciones' => $publicaciones
        ]);
    }
}
