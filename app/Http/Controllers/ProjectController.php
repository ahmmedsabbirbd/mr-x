<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProjectController extends Controller
{
    public function page() {
        return view('pages.projects');
    }

    public function projectsData() {
        $projects = DB::table('projects')
        ->get();
        
        return $projects;
    }
}
