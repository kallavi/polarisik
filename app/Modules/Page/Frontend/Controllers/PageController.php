<?php

namespace App\Modules\Page\Frontend\Controllers;

use App\Http\Controllers\Controller;
use App\Modules\Menu\Backend\Models\Menu;
use App\Modules\Page\Backend\Models\Page;

class PageController extends Controller
{
    public function index($menu = null, $slug = null)
    {
        $getMenu = Menu::withTranslation()->whereTranslation('slug', 'biz-kimiz')->first();
        $getPage = Page::withTranslation()->where('id', $getMenu->content)->first();

        return view('front.who-are-we.index', [
            'page' => $getPage,
            'menu' => $getMenu
        ]);
    }
}
