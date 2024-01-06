<?php

namespace App\Http\Controllers\Backoffice;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use App\Models\JoinUsForm;
use Throwable;

class ContactFormController extends Controller
{
    public function index()
    {
        $contacts = Contact::all();
        return view('admin.pages.forms.contact', ['contacts' => $contacts]);
    }

    public function destroy($id)
    {
        $contact = Contact::findOrFail($id);
        try {
            $contact->delete();
            $status = 'success';
            $message = 'Mesaj Silindi.';
            return view('admin.pages.forms.contact', ['status' => $status, 'message' => $message] );
        } catch (Throwable $e) {
            $status = 'danger';
            $message = 'Bir sorun oluştu. Lütfen daha sonra tekrar deneyin..';
            return view('admin.pages.forms.contact', ['status' => $status, 'message' => $message] );
        }
    }
}