<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SocailMediaController extends Controller
{
    public function socailmediapage() {
        return view('pages.admin.socail-media.index');
    }

    public function socailUpdate(Request $request) {
        $socailmedia = DB::table('socials')->first();
        return DB::table('socials')->where('id','=',$socailmedia->id)->update([
            'twitterLink'=>$request->twitterLink,
            'githubLink'=>$request->githubLink,
            'linkedinLink'=>$request->linkedinLink
        ]);
    }
}
