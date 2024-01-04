<?php

namespace App\Modules\Photo\Frontend\Controllers;

use App\Http\Controllers\Controller;
use App\Modules\Photo\Backend\Models\Photo;
use App\Modules\Video\Backend\Models\Video;
use Illuminate\Http\Request;

class PhotoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index($locale = null, $slug = null)
    {
        $photos = Photo::where('status', 'published')->get();
        $videos = Video::where('status', 'published')->get();
        return view('front.media.index', [
            'photos' => $photos,
            'videos' => $videos
        ]);
    }

    public function detailPage($locale = null, $slug = null)
    {
        $photo = Photo::withTranslation()->with('gallery')->whereTranslation('slug', $slug)->first();
        return view('front.media.detail', [
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
