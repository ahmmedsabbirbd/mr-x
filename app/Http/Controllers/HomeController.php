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

        if($hero) {
            return response()->json([
                'status'=>200,
                'data' => $hero
            ]);
        } else {
            return response()->json([
                'status'=>404,
                'data' => 'Data not found'
            ]);
        }
        // return DB::table('heroprperties')
        //             ->first();

    }

    public function aboutData() {
        $about = DB::table('abouts')
        ->first();

        if($about) {
            return response()->json([
                'status'=>200,
                'data' => $about
            ]);
        } else {
            return response()->json([
                'status'=>404,
                'data' => 'Data not found'
            ]);
        }
    }

    public function socialsData() {
        $socials = DB::table('socials')
        ->first();

        if($socials) {
            return response()->json([
                'status'=>200,
                'data' => $socials
            ]);
        } else {
            return response()->json([
                'status'=>404,
                'data' => 'Data not found'
            ]);
        }
    }
}
