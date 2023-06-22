<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreContactRequest;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function page() {
        return view('pages.contact');
    }

    public function contactRequest(StoreContactRequest $request) {
        return 'form submited';
    }
}
