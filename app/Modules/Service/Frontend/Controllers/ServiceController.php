<?php

namespace App\Modules\Service\Frontend\Controllers;

use App\Http\Controllers\Controller;
use App\Modules\Service\Backend\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function index($locale = null, $slug = null)
    {
        $service = Service::translatedIn(app()->getLocale());
        $services = Service::where('status', 'published')->get();
        return view('front.services.index', [
            'service' => $service,
            'services' => $services
        ]);
    }

    public function detailPage($slug = null)
    {
        $service = Service::with('gallery')->whereTranslation('slug', $slug)->first();
        $services = Service::where('status', 'published')->get();
        return view('front.services.detail', [
            'service' => $service,
            'services' => $services
        ]);
    }
}
