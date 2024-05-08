<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


// route home
Route::get('/', function(){

    $data =
    [
        'name' => 'pippo',
        'lastname' => 'pluto'
    ];

    $link =
    [
        'link_about' => 'http://127.0.0.1:8000/about'
    ];

    return view('home', $data, $link);
})->name('homepage');



// route about
Route::get('/about', function(){
    return view('about');
})->name('aboutpage');
