<?php

namespace App\Modules\Video\Backend\Controllers;

use App\Http\Controllers\Controller;
use App\Modules\Video\Backend\Models\Video;
use Illuminate\Http\Request;
use Throwable;

class VideoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $videos = Video::all();
        return view('Video-Backend::index', compact('videos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Video-Backend::create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $video = new Video();
        $video->fill($request->all());
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $file_name = uniqid() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('uploads/video'), $file_name);
            $image = 'uploads/video/' . $file_name;
            $video->image = $image;
        }

        try {
            $video->save();
            // return response()->json(['status' => "success", 'message' => 'Fotoğraf Galeri Eklendi.', 'video_id' => $video->id]);
            return redirect()->route('admin.video.edit', $video->id)->with(['status' => "success", 'message' => 'Video Galeri Güncellendi.']);
        } catch (Throwable $e) {
            return redirect()->route('admin.video.edit', $video->id)->with(['status' => "danger", 'message' => 'Bir sorun oluştu. Lütfen daha sonra tekrar deneyin..']);
        }
    }

    public function upload(Request $request)
    {
        $video = Video::find($request->video_id);
        if (request()->hasFile('file')) {
            $img = $request->file('file');
            $file_name = uniqid() . '.' . $img->getClientOriginalExtension();
            $img->move(public_path('uploads/video'), $file_name);
            $video->gallery()->create([
                'slug' => 'uploads/video/' . $file_name,
            ]);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Video $video)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Video $video)
    {
        $videoGallery = Video::where('id', $video->id)->first();
        return view('Video-Backend::edit', (['video' => $video, 'gallery' => $videoGallery]));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Video $video)
    {
        $old_image = $video->image;
        $video->fill($request->all());
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $file_name = uniqid() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('uploads/video'), $file_name);
            $image = 'uploads/video/' . $file_name;
            $video->image = $image;
        } else {
            $video->image = $old_image;
        }

        try {
            $video->save();
            return redirect()->route('admin.video.edit', $video->id)->with(['status' => "success", 'message' => 'Video Galeri Güncellendi.']);
        } catch (Throwable $e) {
            dd($e);
            return redirect()->route('admin.video.edit', $video->id)->with(['status' => "danger", 'message' => 'Bir sorun oluştu. Lütfen daha sonra tekrar deneyin..']);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $video = Video::find($id);
        try {
            $video->delete();

            $status = 'success';
            $message = 'Fotoğraf Galeri Silindi.';
            return redirect()->route('admin.video.index')->with(['status' => $status, 'message' => $message]);
        } catch (Throwable $e) {
            $status = 'danger';

            $message = 'Bir sorun oluştu. Lütfen daha sonra tekrar deneyin..';
            return redirect()->route('admin.video.index')->with(['status' => $status, 'message' => $message]);
        }
    }
}
