<?php

namespace App\Http\Controllers\Backoffice;

use App\Http\Controllers\Controller;
use App\Models\JoinUsForm;
use Throwable;

class JoinFormController extends Controller
{
    public function index()
    {
        $joins = JoinUsForm::all();
        return view('admin.pages.forms.join', ['joins' => $joins]);
    }

    public function destroy($id)
    {
        dd($id);
        $joins = JoinUsForm::findOrFail($id);
        try {
            $joins->delete();
            $status = 'success';
            $message = 'Mesaj Silindi.';
            return view('admin.pages.forms.join', ['status' => $status, 'message' => $message] );
        } catch (Throwable $e) {
            $status = 'danger';
            $message = 'Bir sorun oluştu. Lütfen daha sonra tekrar deneyin..';
            return view('admin.pages.forms.join', ['status' => $status, 'message' => $message] );
        }
    }
}