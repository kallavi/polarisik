<?php

use Illuminate\Support\Facades\Route;

//Route::group(['prefix' => '{{modulePrefix}}'], function () {
//    // Define module-specific routes here
//    Route::get('/',[HomepageController::class,'index'])->name('{{modulePrefix}}.index');
//});


Route::resource(
    env('ADMIN_PREFIX') . '/' . 'homepage',
    App\Modules\Homepage\Backend\Controllers\HomepageController::class,
    [
        'names' => [
            'edit' => 'admin.homepage.edit',
            'index' => 'admin.homepage.index',
            'create' => 'admin.homepage.create',
            'store' => 'admin.homepage.store',
            'destroy' => 'admin.homepage.destroy',
            'update' => 'admin.homepage.update',
        ]
    ]
);