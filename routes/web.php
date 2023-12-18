<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginRegisterController;

use App\Http\Controllers\Backoffice\HomeController;
use App\Http\Controllers\Frontend\HomeController as FrontendHome;
use App\Modules\Page\Frontend\Controllers\PageController;
use App\Modules\Partner\Frontend\Controllers\PartnerController as FrontPartnerController;
use App\Modules\Slug\Backend\Controllers\SlugController;
use App\Modules\Service\Frontend\Controllers\ServiceController as FrontServiceController;
use App\Modules\Photo\Frontend\Controllers\PhotoController as FrontPhotoController;

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

Route::controller(LoginRegisterController::class)->group(function () {
    Route::get('/register', 'register')->name('register');
    Route::post('/store', 'store')->name('store');
    Route::post('/storeAdmin', 'storeAdmin')->name('storeAdmin');
    // Route::get('/login', 'login')->name('login');
    Route::post('/authenticate', 'authenticate')->name('authenticate');
    Route::post('/authAdmin', 'authAdmin')->name('authAdmin');
    Route::get('/dashboard', 'dashboard')->name('dashboard');
    Route::get('/logout', 'logout')->name('logout');
});

Route::get('/home', function () {
    return redirect()->route('backoffice.index');
});
Route::get(env('ADMIN_PREFIX'), function () {
    return redirect()->route('backoffice.login');
});

Route::get(env('ADMIN_PREFIX') . '/login', [LoginRegisterController::class, 'login'])->name('backoffice.login');
Route::get(env('ADMIN_PREFIX') . '/home', [HomeController::class, 'index'])->name('backoffice.index');

Route::prefix(env('ADMIN_PREFIX'))->middleware(\App\Http\Middleware\BackofficeMiddleware::class)->group(
    function () {
        Route::get('/activities', [HomeController::class, 'activity'])->name('activities');

        Route::post('/slug-generate', [SlugController::class, 'generate'])->name('slug.generate');

        /* News */
        Route::resource(
            'news',
            \App\Modules\News\Backend\Controllers\NewsController::class,
            [
                'names' => [
                    'edit' => 'news.edit',
                    'index' => 'admin.news.index',
                    'create' => 'news.create',
                    'store' => 'news.store',
                    'destroy' => 'news.destroy',
                    'update' => 'news.update'
                ],
            ]
        );
        Route::get('news/delete/{id}', [App\Modules\News\Backend\Controllers\NewsController::class, 'delete'])->name('admin.news.delete');
        Route::post('/news-gallery-delete', [App\Modules\News\Backend\Controllers\NewsController::class, 'galleryDelete'])->name('newsGallery.delete');
        Route::post('/project-gallery-delete', [App\Modules\Project\Backend\Controllers\ProjectController::class, 'galleryDelete'])->name('projectGallery.delete');


        /* News Categories */
        Route::resource(
            'newscategories',
            \App\Modules\News\Backend\Controllers\CategoryController::class,
            [
                'names' => [
                    'edit' => 'newscategories.edit',
                    'index' => 'newscategories.index',
                    'create' => 'newscategories.create',
                    'store' => 'newscategories.store',
                    'destroy' => 'newscategories.destroy',
                    'update' => 'newscategories.update'
                ],
            ]
        );

        /* Projects */
        Route::resource(
            'projects',
            \App\Modules\Project\Backend\Controllers\ProjectController::class,
            [
                'names' => [
                    'edit' => 'projects.edit',
                    'index' => 'projects.index',
                    'create' => 'projects.create',
                    'store' => 'projects.store',
                    'destroy' => 'projects.destroy',
                    'update' => 'projects.update'
                ],
            ]
        );
        Route::get('projects/delete/{id}', [App\Modules\Project\Backend\Controllers\ProjectController::class, 'delete'])->name('admin.projects.delete');

        /* Project Categories */
        Route::resource(
            'projectcategories',
            \App\Modules\Project\Backend\Controllers\CategoryController::class,
            [
                'names' => [
                    'edit' => 'projectcategories.edit',
                    'index' => 'projectcategories.index',
                    'create' => 'projectcategories.create',
                    'store' => 'projectcategories.store',
                    'destroy' => 'projectcategories.destroy',
                    'update' => 'projectcategories.update'
                ],
            ]
        );

        /* Menus */
        Route::resource(
            'menus',
            \App\Modules\Menu\Backend\Controllers\MenuController::class,
            [
                'names' => [
                    'edit' => 'menus.edit',
                    'index' => 'menus.index',
                    'create' => 'menus.create',
                    'store' => 'menus.store',
                    'destroy' => 'menus.destroy',
                    'update' => 'menus.update'
                ],
            ]
        );

        /* Pages */
        Route::resource(
            'pages',
            \App\Modules\Page\Backend\Controllers\PageController::class,
            [
                'names' => [
                    'edit' => 'pages.edit',
                    'index' => 'pages.index',
                    'create' => 'pages.create',
                    'store' => 'pages.store',
                    'destroy' => 'pages.destroy',
                    'update' => 'pages.update'
                ],
            ]
        );

        /* Pages */
        Route::resource(
            'services',
            \App\Modules\Service\Backend\Controllers\ServiceController::class,
            [
                'names' => [
                    'edit' => 'services.edit',
                    'index' => 'services.index',
                    'create' => 'services.create',
                    'store' => 'services.store',
                    'destroy' => 'services.destroy',
                    'update' => 'services.update'
                ],
            ]
        );

        /* Sliders */
        Route::resource(
            'sliders',
            \App\Modules\Slider\Backend\Controllers\SliderController::class,
            [
                'names' => [
                    'edit' => 'sliders.edit',
                    'index' => 'sliders.index',
                    'create' => 'sliders.create',
                    'store' => 'sliders.store',
                    'destroy' => 'sliders.destroy',
                    'update' => 'sliders.update'
                ],
            ]
        );
    }
);

// Route::get('/medya', [CardController::class, 'medyaPhotoCard']);
// Route::get('/medya/album/{slug}', [CardController::class, 'showAlbum']);


// Route::group(['prefix' => 'hizmetlerimiz'], function () {
//     Route::get('/', [SomeController::class, 'index'])->name('hizmetlerimiz.index');
//     Route::get('festivaller-konserler', [SomeController::class, 'festivallerKonserler'])->name('hizmetlerimiz.festivaller-konserler');
//     Route::get('kongre-toplantilar', [SomeController::class, 'kongreToplantilar'])->name('hizmetlerimiz.kongre-toplantilar');
//     Route::get('resmi-torenler', [SomeController::class, 'resmiTorenler'])->name('hizmetlerimiz.resmi-torenler');
//     Route::get('tanitimlar-lansmanlar', [SomeController::class, 'tanitimlarLansmanlar'])->name('hizmetlerimiz.tanitimlar-lansmanlar');
//     Route::get('fuar-stand', [SomeController::class, 'fuarStand'])->name('hizmetlerimiz.fuar-stand');
//     Route::get('vip', [SomeController::class, 'vip'])->name('hizmetlerimiz.vip');
//     Route::get('lcv', [SomeController::class, 'lcv'])->name('hizmetlerimiz.lcv');
// });

Route::get('/', [FrontendHome::class, 'index'])->name('home');

Route::get('/biz-kimiz', [PageController::class, 'index'])->name('about.index');

// Route::get('/hizmetlerimiz', [FrontServiceController::class, 'index'])->name('service.index');
// Route::get('/hizmetlerimiz/{slug}', [FrontServiceController::class, 'detailPage'])->name('service.detailPage');

Route::get('/medya', [FrontPhotoController::class, 'index'])->name('media.index');

Route::get('/medya/{slug}', [FrontPhotoController::class, 'detailPage'])->name('media.detailPage');

Route::get('/referanslar', [FrontPartnerController::class, 'index'])->name('references.index');

Route::get('iletisim', function () {
    return view('front.contact.index');
})->name('iletisim');

Route::get('bize-katil', function () {
    return view('front.contact.join-us');
})->name('bize-katil');

Route::group(
    ['prefix' => '{locale?}', 'middleware' => 'localize'],
    function () {

        Route::get(__('/hizmetlerimiz'), [FrontServiceController::class, 'index'])->name('service.index');
        Route::get(__('/hizmetlerimiz/{slug?}'), [FrontServiceController::class, 'detailPage'])->name('service.detailPage');

       // Route::get(__('sayfa') . '/{category?}/{slug?}', [FrontMenuController::class, 'index'])->name('menu.index');

        Route::get(__('iletisim'), function () {
            return view('front.contact.index');
        })->name('iletisim');
        //Route::get('/changeLang/{local}', [LanguageController::class, 'switch'])->name('change.lang');

    }

);