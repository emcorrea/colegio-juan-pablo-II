<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\web\IndexController;
use App\Http\Controllers\web\MenuController;
use App\Http\Controllers\web\PublicacionesController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::get('/',[IndexController::class,'inicio'])->name('home');

Route::controller(MenuController::class)->group(function (){
    Route::get('/menu/{id}','cargaMenu')->name('menu');
});

Route::controller(PublicacionesController::class)->group(function (){
    Route::get('/publicacion/{id}/{idMenu}','cargaPublicacion')->name('publicacion');
});

Route::redirect('/register', '/')->name('home');
Route::redirect('/forgot-password', '/');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
