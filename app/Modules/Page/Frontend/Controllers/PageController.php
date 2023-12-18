<?php

namespace App\Modules\Page\Frontend\Controllers;

use App\Http\Controllers\Controller;
use App\Modules\Menu\Backend\Models\Menu;
use App\Modules\Page\Backend\Models\Page;

class PageController extends Controller
{

    public function index($menu = null, $slug = null)
    {

        $getMenu = Menu::whereTranslation('slug', $menu)->first();
        $getPage = Page::whereTranslation('id', $getMenu->content)->first();

        return view('front.who-are-we.index', [
            'page' => $getPage,
        ]);
    }
}
