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

Route::get('/landingpage', function () {
    return view('landingpage');
});

Route::get('/contact/{version_id?}', function ($version_id=0) {
$versiones = [
    '1234', '5678'
];
    if(!empty($version_id)) {
        $version = $versiones[$version_id];
    }else {
        $version = 0;
    }


    return view('contact', compact('versiones', 'version'));
});