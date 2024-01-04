<?php

namespace App\Modules\Service\Frontend\Controllers;

use App\Http\Controllers\Controller;
use App\Modules\Service\Backend\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function index($locale = null, $slug = null)
    {
        $service = Service::withTranslation()->with('gallery')->first();
        $services = Service::where('status', 'published')->get();
        $next = '';
        $prev = '';
        if ($service != null) {
            $next_id = Service::where('status', "published")->where('id', '>', $service->id)->translatedIn(app()->getLocale())->min('id');
            $next = Service::where('id', $next_id)->first();
    
            $prev_id = Service::where('status', "published")->where('id', '<', $service->id)->translatedIn(app()->getLocale())->max('id');
            $prev = Service::where('id', $prev_id)->first();
        }

        return view('front.services.index', [
            'service' => $service,
            'services' => $services,
            'next' => $next,
            'prev' => $prev
        ]);
    }

    public function detailPage($locale = null, $slug = null)
    {
        $service = Service::withTranslation()->with('gallery')->whereTranslation('slug', $slug)->first();
        $services = Service::where('status', 'published')->get();

        $next_id = Service::where('status', "published")->where('id', '>', $service->id)->translatedIn(app()->getLocale())->min('id');
        $next = Service::where('id', $next_id)->first();

        $prev_id = Service::where('status', "published")->where('id', '<', $service->id)->translatedIn(app()->getLocale())->max('id');
        $prev = Service::where('id', $prev_id)->first();

        return view('front.services.detail', [
            'service' => $service,
            'services' => $services,
            'next' => $next,
            'prev' => $prev
        ]);
    }
}
