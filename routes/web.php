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

Route::get('/', function () {
    return view('front.home.index');
})->name('home');

Route::get('bizkimiz', function () {
    return view('front.who-are-we.index');
})->name('bizkimiz');

Route::get('hizmetlerimiz', function () {
    return view('front.services.index');
})->name('hizmetlerimiz');

Route::get('hizmetlerimiz/festivaller-konserler', function () {
    return view('front.services.festivals-concerts');
})->name('hizmetlerimiz/festivaller-konserler');

Route::get('hizmetlerimiz/kongre-toplantilar', function () {
    return view('front.services.congresses-meetings');
})->name('hizmetlerimiz/kongre-toplantilar');

Route::get('hizmetlerimiz/resmi-torenler', function () {
    return view('front.services.official-ceremonies');
})->name('hizmetlerimiz/resmi-torenler');

Route::get('hizmetlerimiz/tanitimlar-lansmanlar', function () {
    return view('front.services.promotions');
})->name('hizmetlerimiz/tanitimlar-lansmanlar');

Route::get('hizmetlerimiz/fuar-stand', function () {
    return view('front.services.fair-stands');
})->name('hizmetlerimiz/fuar-stand');

Route::get('hizmetlerimiz/vip', function () {
    return view('front.services.vip');
})->name('hizmetlerimiz/vip');


Route::get('hizmetlerimiz/lcv', function () {
    return view('front.services.lcv');
})->name('hizmetlerimiz/lcv');
