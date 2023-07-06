<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SocailMediaController extends Controller
{
    public function socailmediapage() {
        return view('pages.admin.socail-media.index');
    }
}