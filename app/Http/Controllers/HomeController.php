<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function page() {
        return view('pages.home');
    }

    public function heroData() {
        $hero = DB::table('heroprperties')
        ->first();

        return $hero;
    }
    
    public function aboutData() {
        $about = DB::table('abouts')
        ->first();

        return $about;
    }
    
    public function socialsData() {
        $socials = DB::table('socials')
        ->first();

        return $socials;
    }
}
