<?php

namespace App\Http\Controllers\Backoffice;

use App\Http\Controllers\Controller;
use App\Modules\Page\Backend\Models\Page;
use Illuminate\Http\Request;
use Throwable;

class HomePageController extends Controller
{
    public function index()
    {
        $pages = Page::all();
        foreach ($pages as $page) {
            if ($page->{'name:tr'} == 'anasayfa-metin-1') {
                return view('admin.pages.anasayfa.index', ['page' => $page]);
            }
        }
    }

    public function update(Request $request)
    {
        $page = Page::whereTranslation('name', 'anasayfa-metin-1')->first();
        $page->fill($request->all());
        if ($request->hasFile('cover')) {
            $file = $request->file('cover');
            $file_name = uniqid() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('uploads/page'), $file_name);
            $cover = 'uploads/page/' . $file_name;
            $page->cover = $cover;
        }

        try {
            $page->save();
            $status = 'success';
            $message = 'Sayfa Güncellendi.';
            return redirect()->route('anasayfaicerik.index')->with( ['status' => $status, 'message' => $message] );
        } catch (Throwable $e) {
            $status = 'danger';
            $message = 'Bir sorun oluştu. Lütfen daha sonra tekrar deneyin..';
            return redirect()->route('anasayfaicerik.index')->with( ['status' => $status, 'message' => $message] );
        }
    }
}

// $page = Page::whereTranslation('name', 'anasayfa-metin-1')->first();


// dd($page->translate('en')->name);

// return view('admin.pages.anasayfa.index', ['page' => $page]);