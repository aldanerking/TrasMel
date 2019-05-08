<?php
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/TrasMel', function () {
    return view('TrasMel/Home/home');
});

Route::get('/Login',function(){
    return view('TrasMel/autentificacion/login');
});
Route::get('/Registro',function(){
    return view('TrasMel/autentificacion/registro');
});

//post
Route::post('/Registro', 'usuarioController@store' );


