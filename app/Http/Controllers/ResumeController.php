<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ResumeController extends Controller
{
    public function page() {
        return view('pages.resume');
    }

    public function experiencesData() {
        $experiences = DB::table('experiences')
        ->get();

        return response()->json([
            'status'=>200,
            'data'=>$experiences
        ]);
    }

    public function educationsData() {
        $education = DB::table('educations')
        ->get();

        return response()->json([
            'status'=>200,
            'data'=>$education
        ]);
    }

    public function skillsData() {
        $skills = DB::table('skills')
        ->get();

        return response()->json([
            'status'=>200,
            'data'=>$skills
        ]);
    }

    public function languagesData() {
        $languages = DB::table('languages')
        ->get();

        if($languages) {
            return response()->json([
                'status'=>200,
                'data' => $languages
            ]);
        } else {
            return response()->json([
                'status'=>404,
                'data' => 'Data not found'
            ]);
        }
    }
}
