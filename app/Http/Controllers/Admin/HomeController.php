<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\HeroRquest;
use Illuminate\Http\Request;
use DB;

class HomeController extends Controller
{
    public function index(){
        return view('home');
    }
    public function homePage(){
        return view('pages.admin.home.index');
    }

    public function heroDataUpdate(HeroRquest $request){
        $hero = DB::table('heroprperties')->first();
        return DB::table('heroprperties')->where('id','=',$hero->id)->update([
            'keyLine'=>$request->keyLine,
            'title'=>$request->title,
            'short_title'=>$request->short_title,
            'img'=>$request->img,
        ]);
    }
    public function aboutDataUpdate(Request $request){
        $hero = DB::table('abouts')->first();
        return DB::table('abouts')->where('id','=',$hero->id)->update([
            'title'=>$request->title,
            'details'=>$request->details
        ]);
    }
}
