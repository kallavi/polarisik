<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SomeController extends Controller
{
    public function index()
    {
        return view('front.services.index'); // Uygun bir blade dosyasının adını yazın
    }

    public function festivallerKonserler()
    {
        return view('front.services.festivals-concerts');
    }

    public function kongreToplantilar()
    {
        return view('front.services.congresses-meetings');
    }

    public function resmiTorenler()
    {
        return view('front.services.official-ceremonies');
    }

    public function tanitimlarLansmanlar()
    {
        return view('front.services.promotions');
    }

    public function fuarStand()
    {
        return view('front.services.fair-stands');
    }

    public function vip()
    {
        return view('front.services.vip');
    }

    public function lcv()
    {
        return view('front.services.lcv');
    }
}