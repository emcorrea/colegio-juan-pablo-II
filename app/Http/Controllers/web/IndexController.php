<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Menu;
use App\Models\SubMenu;
use App\Models\Publicacion;
use App\Models\Parametro;
use App\Models\LogFormularioEmailContacto;
use App\Mail\ContactoMailController;
use Illuminate\Support\Facades\Mail;

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

    public function envioMailContacto(Request $request)
    {
        $parametroEmail = Parametro::where('nombre','CORREOS_FORMULARIO_HOME')
            ->where('estado_id',1)
            ->skip(0)
            ->take(1)
            ->get();

        if($parametroEmail){
            $email          = explode(',',$parametroEmail[0]['valor']);
            $nombre         = $request['nombre'];
            $emailUsuario   = $request['email'];
            $asunto         = $request['asunto'];
            $mensaje        = $request['mensaje'];


            foreach($email AS $em){
                Mail::to($em)->send(new ContactoMailController($nombre,$emailUsuario,$asunto,$mensaje));
            }

            $logGormularioEmailContacto = new LogFormularioEmailContacto();
            $logGormularioEmailContacto->nombre         = $nombre;
            $logGormularioEmailContacto->email          = $emailUsuario;
            $logGormularioEmailContacto->asunto         = $asunto;
            $logGormularioEmailContacto->mensaje        = $mensaje;
            $logGormularioEmailContacto->email_receptor = $parametroEmail[0]['valor'];
            $logGormularioEmailContacto->save();
        }

        return'OK';
    }
}
