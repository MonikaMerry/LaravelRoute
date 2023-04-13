<?php

use Illuminate\Routing\Route as RoutingRoute;
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

Route::get('/', function () {
    return view('growwson');
});

Route::get('about',function(){
    return view('Menus.about');
});

Route::get('contact',function(){
     return view('Menus.contact');
});

Route::get('courses',function(){
    return view('Menus.courses');
});

Route::get('features',function(){
    return view('Menus.features');
});
