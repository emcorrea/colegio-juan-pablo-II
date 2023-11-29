<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/categoria', function (Request $request) {

    return \App\Models\Categoria::when($request->search, function($query, $search){
        $query->where('nombre', 'like', "%{$search}%");
    })
        
        ->when($request->selected, function($query, $selected) {
            $query->whereIn('id',$selected)
            ->limit(10);
        })
        ->get();

})->name('api.categoria.index');

Route::get('/tipo-publicacion', function (Request $request) {

    return \App\Models\TipoPublicacionDetalle::when($request->search, function($query, $search){
        $query->where('nombre', 'like', "%{$search}%");
    })
        
        ->when($request->selected, function($query, $selected) {
            $query->whereIn('id',$selected)
            ->limit(10);
        })
        ->get();

})->name('api.tipo.publicacion.index');