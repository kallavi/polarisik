<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CardController extends Controller
{
    public function medyaPhotoCard()
    {
        $cardsData = [
            [
                'url' => url('/medya/album/qualita-lansman'),
                'image' => 'assets/front/images/media/photos/image1.jpg',
                'title' => 'QUALITA Lansman',
            ],
            [
                'url' => url('/medya/album/qualita'),
                'image' => 'assets/front/images/media/photos/image2.jpg',
                'title' => 'QUALITA test test',
            ],
            [
                'url' => url('/medya/album/qualitess'),
                'image' => 'assets/front/images/media/photos/image3.jpg',
                'title' => 'QUALITA test test3',
            ],
            [
                'url' => url('/medya/album/qualita-lansman'),
                'image' => 'assets/front/images/media/photos/image3.jpg',
                'title' => 'QUALITA Lansman',
            ],
            [
                'url' => url('/medya/album/qualita'),
                'image' => 'assets/front/images/media/photos/image1.jpg',
                'title' => 'QUALITA test test',
            ],
            [
                'url' => url('/medya/album/qualitess'),
                'image' => 'assets/front/images/media/photos/image2.jpg',
                'title' => 'QUALITA test test3',
            ],
            [
                'url' => url('/medya/album/qualita-lansman'),
                'image' => 'assets/front/images/media/photos/image1.jpg',
                'title' => 'QUALITA Lansman',
            ],
            [
                'url' => url('/medya/album/qualita'),
                'image' => 'assets/front/images/media/photos/image1.jpg',
                'title' => 'QUALITA test test',
            ],
            [
                'url' => url('/medya/album/qualitess'),
                'image' => 'assets/front/images/media/photos/image1.jpg',
                'title' => 'QUALITA test test3',
            ],
        ];
        $videosData = [
            [
                'url' => 'https://www.youtube.com/watch?v=h8j3_PeWgWk',
                'image' => 'assets/front/images/media/photos/image1.jpg',
                'title' => 'QUALITA Lansman',
            ],
            [
                'url' => 'https://www.youtube.com/watch?v=h8j3_PeWgWk',
                'image' => 'assets/front/images/media/photos/image2.jpg',
                'title' => 'QUALITA test test',
            ],
            [
                'url' => 'https://www.youtube.com/watch?v=h8j3_PeWgWk',
                'image' => 'assets/front/images/media/photos/image3.jpg',
                'title' => 'QUALITA test test3',
            ],
            [
                'url' => 'https://www.youtube.com/watch?v=h8j3_PeWgWk',
                'image' => 'assets/front/images/media/photos/image3.jpg',
                'title' => 'QUALITA Lansman',
            ],
            [
                'url' => 'https://www.youtube.com/watch?v=h8j3_PeWgWk',
                'image' => 'assets/front/images/media/photos/image1.jpg',
                'title' => 'QUALITA test test',
            ],
            [
                'url' => 'https://www.youtube.com/watch?v=h8j3_PeWgWk',
                'image' => 'assets/front/images/media/photos/image2.jpg',
                'title' => 'QUALITA test test3',
            ],
            [
                'url' => 'https://www.youtube.com/watch?v=h8j3_PeWgWk',
                'image' => 'assets/front/images/media/photos/image1.jpg',
                'title' => 'QUALITA Lansman',
            ],
            [
                'url' => 'https://www.youtube.com/watch?v=h8j3_PeWgWk',
                'image' => 'assets/front/images/media/photos/image1.jpg',
                'title' => 'QUALITA test test',
            ],
            [
                'url' => 'https://www.youtube.com/watch?v=h8j3_PeWgWk',
                'image' => 'assets/front/images/media/photos/image1.jpg',
                'title' => 'QUALITA test test3',
            ],
        ];
        return view('front.media.index', compact('cardsData', 'videosData'));
    }
    public function showAlbum($slug)
    {
        $albumTitle = ucfirst(str_replace('-', ' ', $slug));

        // Örnek albumData oluşturma
        $albumData = [
            [
                'url' =>  asset('assets/front/images/media/photos/image4.jpg'),
                'image' =>  asset('assets/front/images/media/photos/image4.jpg'),
            ],
            [
                'url' =>  asset('assets/front/images/media/photos/image5.jpg'),
                'image' =>  asset('assets/front/images/media/photos/image5.jpg'),
            ],
            [
                'url' =>  asset('assets/front/images/media/photos/image3.jpg'),
                'image' =>  asset('assets/front/images/media/photos/image3.jpg'),
            ],
            [
                'url' =>  asset('assets/front/images/media/photos/image6.jpg'),
                'image' =>  asset('assets/front/images/media/photos/image6.jpg'),
            ],
            [
                'url' =>  asset('assets/front/images/media/photos/image7.jpg'),
                'image' =>  asset('assets/front/images/media/photos/image7.jpg'),
            ],
            [
                'url' =>  asset('assets/front/images/media/photos/image4.jpg'),
                'image' =>  asset('assets/front/images/media/photos/image4.jpg'),
            ],
            [
                'url' =>  asset('assets/front/images/media/photos/image4.jpg'),
                'image' =>  asset('assets/front/images/media/photos/image4.jpg'),
            ],
        ];

        return view('front.media.photo-album', compact('albumTitle', 'albumData'));
    }
}
