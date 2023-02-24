<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Menu;
use App\Models\SubMenu;
use App\Models\Publicacion;
use App\Models\Parametro;

class PublicacionesController extends Controller
{
    public function cargaPublicacion($id,$idMenu)
    {
        $menu           = Menu::where('estado_id',1)->orderBy('orden', 'asc')->get();
        $subMenu        = SubMenu::where('estado_id',1)->orderBy('orden', 'asc')->get();
        $publicacion    = Publicacion::find($id);

        $parametroRecaptcha      = Parametro::where('nombre','UTILIZA_RECAPTCHAS_FORMULARIO_CONTACTO')
            ->where('estado_id',1)
            ->skip(0)
            ->take(1)
            ->get()
            ->all();

        return view('web.publicaciones.'.$publicacion->path.'',[
            'id'                    => $idMenu,
            'menu'                  => $menu,
            'subMenu'               => $subMenu,
            'publicacion'           => $publicacion,
            'recaptchaFormulario'   => $parametroRecaptcha[0]['valor'],
            'secret_web_recaptcha'  => env('CAPTCHA_SECRET_WEB')
        ]);
    }
}
