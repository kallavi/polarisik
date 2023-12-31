<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginRegisterController;
use App\Http\Controllers\Backoffice\ContactFormController;
use App\Http\Controllers\Backoffice\FormController;
use App\Http\Controllers\Backoffice\HomeController;
use App\Http\Controllers\Backoffice\HomePageController;
use App\Http\Controllers\Backoffice\JoinFormController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\Frontend\HomeController as FrontendHome;
use App\Http\Controllers\JoinUsController;
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
        Route::get('anasayfaicerik', [HomePageController::class, 'index'])->name('anasayfaicerik.index');
        Route::put('anasayfaicerik/update', [HomePageController::class, 'update'])->name('anasayfaicerik.update');

        /* Contact */
        Route::resource(
            'contactform',
            ContactFormController::class,
            [
                'names' => [
                    'edit' => 'contactform.edit',
                    'index' => 'contactform.index',
                    'create' => 'contactform.create',
                    'store' => 'contactform.store',
                    'destroy' => 'contactform.destroy',
                    'update' => 'contactform.update'
                ],
            ]
        );

        /* Join */
        Route::resource(
            'joinform',
            JoinFormController::class,
            [
                'names' => [
                    'edit' => 'joinform.edit',
                    'index' => 'joinform.index',
                    'create' => 'joinform.create',
                    'store' => 'joinform.store',
                    'destroy' => 'joinform.destroy',
                    'update' => 'joinform.update'
                ],
            ]
        );

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


Route::post('/contact_form_submit', [ContactController::class, 'store'])->name('contact.store');
Route::post('/joinus_form_submit', [JoinUsController::class, 'store'])->name('joinus.store');

Route::group(
    ['prefix' => '{locale?}', 'middleware' => 'localize'],
    function () {
        Route::get('/', [FrontendHome::class, 'index'])->name('home');
        Route::get(__('biz-kimiz'), [PageController::class, 'index'])->name('about.index');

        Route::get(__('medya'), [FrontPhotoController::class, 'index'])->name('media.index');

        Route::get(__('medya').'/{slug}', [FrontPhotoController::class, 'detailPage'])->name('media.detailPage');
        
        Route::get(__('referanslar'), [FrontPartnerController::class, 'index'])->name('references.index');

        
        Route::get(__('bize-katil'), function () {
            return view('front.contact.join-us');
        })->name('bize-katil');
        

        Route::get(__('hizmetlerimiz'), [FrontServiceController::class, 'index'])->name('service.index');
        Route::get(__('hizmetlerimiz').'/{slug?}', [FrontServiceController::class, 'detailPage'])->name('service.detailPage');

        Route::get(__('iletisim'), function () {
            return view('front.contact.index');
        })->name('iletisim');
    }
);