<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProjectController extends Controller
{
    public function page() {
        $seo=DB::table('seoproperties')->where('pageName', '=', 'projects')->first();
        return view('pages.projects',['seo'=>$seo]);
    }

    public function projectsData() {
        $projects = DB::table('projects')
        ->get();

        if($projects) {
            return response()->json([
                'status'=>200,
                'data' => $projects
            ]);
        } else {
            return response()->json([
                'status'=>404,
                'data' => 'Data not found'
            ]);
        }
    }
}
