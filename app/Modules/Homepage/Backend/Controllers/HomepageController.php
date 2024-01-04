<?php

namespace App\Modules\Homepage\Backend\Controllers;

use App\Http\Controllers\Controller;
use App\Modules\Homepage\Backend\Models\Homepage;

use Illuminate\Http\Request;

class HomePageController extends Controller
{
    public function index()
    {

 
        return view('admin.pages.home.index ', []);
        
    }

    public function edit()
    {

        $homepage = HomePage::orderBy('sort')->get();
        return view('admin.pages.home.edit3', ['homepage' => $homepage]);

    }



    public function sortable(Request $request)
    {




        foreach ($_POST['item'] as $key => $value) {
            $homepage = HomePage::where('key', $value)->first();
            $homepage->sort = intval($key);
            $homepage->save();
        }

        echo true;
    }

    public function update(Request $request)
    {


        foreach ($request->all() as $key => $value) {


            // dd($request->all());

            if ($key != "avatar_remove" && $key != "_token") {


                if (isset($value['image']) && is_file($value['image'])) {
                    $file_name = uniqid() . '.' . $value['image']->getClientOriginalExtension();
                    $value['image']->move(public_path('data/uploads/homepage'), $file_name);
                    $image = $file_name;
                    $value['image'] = 'data/uploads/homepage/' . $image;
                } else {
                    $value['image'] = $value['image_old'];
                }


                $homepage = HomePage::updateOrCreate(
                    ['key' => $key],
                    [
                        'value' => json_encode($value),
                        'sort' => 1,
                    ]
                );


            }
        }

        return redirect()->back();
    }
}
