<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Menu;
use App\Models\SubMenu;
use App\Models\Publicacion;
use App\Models\PublicacionDetalle;
use App\Models\Parametro;

class PublicacionesController extends Controller
{
    public function cargaPublicacion($id,$idMenu)
    {
        $data               = [];
        $menu               = Menu::where('estado_id',1)->orderBy('orden', 'asc')->get();
        $subMenu            = SubMenu::where('estado_id',1)->orderBy('orden', 'asc')->get();
        $publicacion        = Publicacion::find($id);
        $publicacionDetalle = PublicacionDetalle::where('estado_id',1)
            ->where('publicacion_id',$publicacion['id'])
            ->get();

        $parametroRecaptcha      = Parametro::where('nombre','UTILIZA_RECAPTCHAS_FORMULARIO_CONTACTO')
            ->where('estado_id',1)
            ->skip(0)
            ->take(1)
            ->get()
            ->all();
        
        foreach( $publicacionDetalle as $pd ) {
            if ( $pd->tipo_publicacion_detalle_id !== 1 ) {

                $rutaCarpeta    = public_path($pd->contenido);
                $archivos       = scandir($rutaCarpeta);
                $data[ $pd->contenido ] = $archivos;
            }
        }

        if ( $id === '1' ) {

            return view('web.publicaciones.comunicaciones.lista-utiles-escolares-2024',[
                'id'                    => $idMenu,
                'menu'                  => $menu,
                'subMenu'               => $subMenu,
                'publicacion'           => $publicacion,
                'publicacionDetalle'    => $publicacionDetalle,
                'data'                  => $data,
                'recaptchaFormulario'   => $parametroRecaptcha[0]['valor'],
                'secret_web_recaptcha'  => env('CAPTCHA_SECRET_WEB')
            ]);
        }


        return view('web.publicaciones.index',[
            'id'                    => $idMenu,
            'menu'                  => $menu,
            'subMenu'               => $subMenu,
            'publicacion'           => $publicacion,
            'publicacionDetalle'    => $publicacionDetalle,
            'data'                  => $data,
            'recaptchaFormulario'   => $parametroRecaptcha[0]['valor'],
            'secret_web_recaptcha'  => env('CAPTCHA_SECRET_WEB')
        ]);
    }
}
