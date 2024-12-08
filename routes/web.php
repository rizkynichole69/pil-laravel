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
    return view('index');
});

Route::get('mahasiswa', function () {
    return view ('mahasiswa');
});

Route::get('about', function () {
    return view('about');
});

Route::get('profile', function () {
    $nama = 'jefri'; 
    // return view('profile',compact('nama'));
    return view('profile')->with('nama', $nama);
});

Route::get('array', function(){
   for ($i=1; $i <= 5; $i++) { 
    echo 'Hello World' . $i . 'x<br>';
   }
});