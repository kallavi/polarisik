<?php

namespace App\Modules\Photo\Frontend\Controllers;

use App\Http\Controllers\Controller;
use App\Modules\Partner\Backend\Models\Partner;
use App\Modules\Photo\Backend\Models\Photo;
use App\Modules\Photo\Backend\Models\PhotoGallery;

class PhotoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $partner = Partner::withTranslation()->where('status', 'published')->get();
        $photo = Photo::withTranslation()->get();
    
        return view('front.media.index', [
            'partner' => $partner,
            'photo' => $photo,
        ]);
    }

    public function detail($slug = null)
    {
        $partner = Partner::withTranslation()->where('status', 'published')->get();
        $photo = Photo::with('gallery')->whereTranslation('slug', $slug)->first();
 
        return view('front.media.detail', [
            'partner' => $partner,
            'photo' => $photo,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Photo $photo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Photo $photo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Photo $photo)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Photo $photo)
    {
        //
    }
}
