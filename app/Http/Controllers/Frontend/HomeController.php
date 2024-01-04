<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Modules\Partner\Backend\Models\Partner;
use App\Modules\Service\Backend\Models\Service;
use App\Modules\Slider\Backend\Models\Slider;

class HomeController extends Controller
{
    public function index(String $locale)
    {
        $service = Service::withTranslation()->where('status', 'published')->get();
        $partner = Partner::withTranslation()->where('status', 'published')->get();
        $slider = Slider::withTranslation()->where('status', 'published')->get();

        return view('front.home.index', [
            'partners' => $partner,
            'services' => $service,
            'sliders' => $slider,
        ]);
    }
    
}
