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
    $npm = [123,124,125,126];
    $nama = ['jefri','elzan','nichole','nathan'];
    $jumlah= count($npm);
    return view ('mahasiswa',compact('npm','jumlah','nama'));
});

Route::get('about', function () {
    return view('about');
});

Route::get('profile', function () {
    $nama = 'jefri'; 
    // return view('profile',compact('nama'));
    return view('profile')->with('nama', $nama);
});