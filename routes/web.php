<?php

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
use Illuminate\Http\RedirectResponse;

Route::get('/', function () {
    return view('home');
});

Route::get('home', function () {
    return view('home');
});
Route::get('sobre', function () {
    return view('sobre');
});

Route::get('contato', function () {
    return view('contato');
});

Route::get('transfer', function () {
    return view('transfer');
});

Route::get('concha-toro', function () {
    return view('tour1');
});

Route::get('valparaiso', function () {
    return view('tour2');
});

Route::get('valle-nevado', function () {
    return view('tour6');
});

Route::get('cajon-del-maipo', function () {
    return view('tour3');
});

Route::get('bali-hai', function () {
    return view('tour4');
});

Route::get('isla-negra-pomaire', function () {
    return view('tour5');
});

Route::get('tourls', function () {
    return view('tourls');
});

Route::post('enviar-email','OrderController@enviarEmail');

Route::post('enviar-promo','OrderController@enviarPromo');


