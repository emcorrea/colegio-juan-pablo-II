<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Menu;
use App\Models\SubMenu;
use App\Models\Publicacion;
use App\Models\Parametro;

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

        $parametroRecaptcha      = Parametro::where('nombre','UTILIZA_RECAPTCHAS_FORMULARIO_CONTACTO')
            ->where('estado_id',1)
            ->skip(0)
            ->take(1)
            ->get()
            ->all();

        return view('web.menu.'.$menuCargado->path.'',[
            'id'                    => $id,
            'menu'                  => $menu,
            'subMenu'               => $subMenu,
            'menuCargado'           => $menuCargado,
            'contenido'             => $contenido,
            'publicaciones'         => $publicaciones,
            'recaptchaFormulario'   => $parametroRecaptcha[0]['valor'],
            'secret_web_recaptcha'  => env('CAPTCHA_SECRET_WEB')
        ]);
    }
}
