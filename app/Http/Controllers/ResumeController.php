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

        return $experiences;
    }

    public function educationsData() {
        $education = DB::table('educations')
        ->get();

        return $education;
    }

    public function skillsData() {
        $skills = DB::table('skills')
        ->get();

        return $skills;
    }

    public function languagesData() {
        $languages = DB::table('languages')
        ->get();

        return $languages;
    }
}
