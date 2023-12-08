<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\CardController;
use App\Http\Controllers\SomeController;
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


Route::get('/medya', [CardController::class, 'medyaPhotoCard']);
Route::get('/medya/album/{slug}', [CardController::class, 'showAlbum']);

Route::get('/referanslar', [CardController::class, 'referencesCard']);


Route::group(['prefix' => 'hizmetlerimiz'], function () {
    Route::get('/', [SomeController::class, 'index'])->name('hizmetlerimiz.index');
    Route::get('festivaller-konserler', [SomeController::class, 'festivallerKonserler'])->name('hizmetlerimiz.festivaller-konserler');
    Route::get('kongre-toplantilar', [SomeController::class, 'kongreToplantilar'])->name('hizmetlerimiz.kongre-toplantilar');
    Route::get('resmi-torenler', [SomeController::class, 'resmiTorenler'])->name('hizmetlerimiz.resmi-torenler');
    Route::get('tanitimlar-lansmanlar', [SomeController::class, 'tanitimlarLansmanlar'])->name('hizmetlerimiz.tanitimlar-lansmanlar');
    Route::get('fuar-stand', [SomeController::class, 'fuarStand'])->name('hizmetlerimiz.fuar-stand');
    Route::get('vip', [SomeController::class, 'vip'])->name('hizmetlerimiz.vip');
    Route::get('lcv', [SomeController::class, 'lcv'])->name('hizmetlerimiz.lcv');
});

Route::get('/', function () {
    return view('front.home.index');
})->name('home');

Route::get('bizkimiz', function () {
    return view('front.who-are-we.index');
})->name('bizkimiz');

Route::get('iletisim', function () {
    return view('front.contact.index');
})->name('iletisim');

Route::get('bize-katil', function () {
    return view('front.contact.join-us');
})->name('bize-katil');