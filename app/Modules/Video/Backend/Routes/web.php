<?php

use Illuminate\Support\Facades\Route;

Route::resource(
    env('ADMIN_PREFIX') . '/' . 'video',
    App\Modules\Video\Backend\Controllers\VideoController::class,
    [
        'names' => [
            'edit' => 'admin.video.edit',
            'index' => 'admin.video.index',
            'create' => 'admin.video.create',
            'store' => 'admin.video.store',
            'destroy' => 'admin.video.destroy',
            'update' => 'admin.video.update',
        ]
    ]
);
Route::post(env('ADMIN_PREFIX') . '/video/upload', [App\Modules\Video\Backend\Controllers\VideoController::class, 'upload'])->name('admin.video.upload');
