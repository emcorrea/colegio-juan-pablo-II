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
use Illuminate\Support\Facades\Http;

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
        $parametroMensaje       = Parametro::where('nombre','BOOTBOX_INFORMATIVO_HOME')
            ->where('estado_id',1)
            ->skip(0)
            ->take(1)
            ->get()
            ->all();

        $parametroRecaptcha      = Parametro::where('nombre','UTILIZA_RECAPTCHAS_FORMULARIO_CONTACTO')
            ->where('estado_id',1)
            ->skip(0)
            ->take(1)
            ->get()
            ->all();

        return view('web.index',[
            'id'                    => 'home',
            'menu'                  => $menu,
            'subMenu'               => $subMenu,
            'actualizaciones'       => $ultimasActualizaciones,
            'mensaje_inicio'        => $parametroMensaje,
            'recaptchaFormulario'   => $parametroRecaptcha[0]['valor'],
            'secret_web_recaptcha'  => env('CAPTCHA_SECRET_WEB')
        ]);
    }

    public function envioMailContacto(Request $request)
    {
        $parametroRecaptcha      = Parametro::where('nombre','UTILIZA_RECAPTCHAS_FORMULARIO_CONTACTO')
            ->where('estado_id',1)
            ->skip(0)
            ->take(1)
            ->get()
            ->all();

        if($parametroRecaptcha[0]['valor'] == 1){
            $response = Http::asForm()->post('https://www.google.com/recaptcha/api/siteverify',[
                'secret'    => env('CAPTCHA_SECRET'),
                'response'  => $request['g-recaptcha-response']
            ])->object();

            if($response->success && $response->score >= 0.7){
    
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

                return redirect()->route('home');
            }
        }else{

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
        }

        return'OK';
    }
}
