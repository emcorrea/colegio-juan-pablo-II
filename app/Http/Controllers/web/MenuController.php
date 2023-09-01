<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Menu;
use App\Models\SubMenu;
use App\Models\Publicacion;
use App\Models\Parametro;
use App\Models\Equipo;

class MenuController extends Controller
{
    public function cargaMenu($id)
    {
        $publicaciones  = [];
        $menu           = Menu::where('estado_id',1)->with('subMenu')->orderBy('orden', 'asc')->get();
        $menuCargado    = Menu::find($id);
        $contenido      = explode('***',$menuCargado->contenido);
        $equipo         = false;

        if($id === '2'){
            $equipo = Equipo::where('estado_id',1)->orderBy('orden', 'asc')->get();
        }

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
            'menuCargado'           => $menuCargado,
            'contenido'             => $contenido,
            'publicaciones'         => $publicaciones,
            'recaptchaFormulario'   => $parametroRecaptcha[0]['valor'],
            'equipo'                => $equipo,
            'secret_web_recaptcha'  => env('CAPTCHA_SECRET_WEB')
        ]);
    }

    public function cargaSubMenu($id)
    {
        $publicaciones  = [];
        $menu           = Menu::where('estado_id',1)->with('subMenu')->orderBy('orden', 'asc')->get();
        $menuCargado    = SubMenu::find($id);
        $contenido      = explode('***',$menuCargado->contenido);
        $equipo         = false;

        if($id === '2'){
            $equipo = Equipo::where('estado_id',1)->orderBy('orden', 'asc')->get();
        }

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

        return view('web.menu.sub-menu.'.$menuCargado->path.'',[
            'id'                    => $id,
            'menu'                  => $menu,
            'menuCargado'           => $menuCargado,
            'contenido'             => $contenido,
            'publicaciones'         => $publicaciones,
            'recaptchaFormulario'   => $parametroRecaptcha[0]['valor'],
            'equipo'                => $equipo,
            'secret_web_recaptcha'  => env('CAPTCHA_SECRET_WEB')
        ]);
    }
}
