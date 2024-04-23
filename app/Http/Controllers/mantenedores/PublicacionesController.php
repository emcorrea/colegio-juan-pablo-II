<?php

namespace App\Http\Controllers\mantenedores;

use App\Http\Controllers\Controller;
use App\Models\Publicacion;
use App\Models\PublicacionDetalle;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Support\Carbon;

class PublicacionesController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $publicaciones = DB::table('publicaciones')
            ->join('categorias', 'publicaciones.categoria_id', '=', 'categorias.id')
            ->select('publicaciones.*', 'categorias.nombre as categoria')
            ->where('publicaciones.estado_id',1)
            ->orderBy('publicaciones.id', 'desc')
            ->paginate(10);

        return view('mantenedores.publicaciones.index', compact('publicaciones'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categorias = DB::table('categorias')
            ->where('estado_id',1)
            ->get();
        
        $tiposPublicacion = DB::table('tipo_publicacion_detalles')
            ->where('estado_id',1)
            ->get();

        return view('mantenedores.publicaciones.create', [
            'categorias'        => $categorias,
            'tiposPublicacion'  => $tiposPublicacion,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nombre'        => 'required|min:3',
            'descripcion'   => 'required|min:3',
            'contenido'     => 'required|min:3'
        ]);

        $publicacion = $request->user()->publicacion()->create([
            'nombre'        => $request->nombre,
            'descripcion'   => $request->descripcion,
            'fecha'         => Carbon::now()->format('Y-m-d H:i:s'),
            'importante'    => 0,
            'path'          => Str::random(20),
            'categoria_id'  => $request->categoria,
            'estado_id'     => 1,
        ]);

        $publicacionDetalle = new PublicacionDetalle();
        $publicacionDetalle->contenido                      = $request->contenido;
        $publicacionDetalle->publicacion_id                 = $publicacion->id;
        $publicacionDetalle->tipo_publicacion_detalle_id    = 1;
        $publicacionDetalle->estado_id                      = 1;
        $publicacionDetalle->save();

        if ( $request->file('archivos') ) {
            
            $directorio = 'archivos/'. strtoupper(str_replace(" ","_",$request->nombre));

            if ( !is_dir($directorio) ) {

                if ( mkdir($directorio, 0777, true) ) {

                    $publicacionDetalle = new PublicacionDetalle();
                    $publicacionDetalle->contenido                      = $directorio;
                    $publicacionDetalle->publicacion_id                 = $publicacion->id;
                    $publicacionDetalle->tipo_publicacion_detalle_id    = $request->tipo;
                    $publicacionDetalle->estado_id                      = 1;
                    $publicacionDetalle->save();
                    
                    foreach ( $request->file('archivos') as $file ) {
            
                        $nombreArchivo = $file->getClientOriginalName();
                        $file->move( $directorio, $nombreArchivo );

                    }
                }
            }

        }

        return redirect()->route('mantenedores.publicaciones.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $publicaciones = DB::update('UPDATE publicaciones SET estado_id = 2 WHERE id = ?', [ $id ]); 

        $publicacionesDetalle = DB::table('publicacion_detalles')
            ->where('publicacion_id', $id)
            ->get();
        
        foreach ( $publicacionesDetalle as $pd ) {
            $publicacionDetalle = DB::update('UPDATE publicacion_detalles SET estado_id = 2 WHERE publicacion_id = ?', [ $pd->id ]); 
        }

        return redirect()->route('mantenedores.publicaciones.index');
    }
}
