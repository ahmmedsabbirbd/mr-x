<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ExperienceRquest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProjectController extends Controller
{
    public function projectpage(){
        return view('pages.admin.project.index');
    }

    public function storeProject(Request $request){
        return DB::table('projects')->insert([
            'title'=>$request->title,
            'previewLink'=>$request->previewLink,
            'thumbnailLink'=>$request->thumbnailLink,
            'details'=>$request->details,
        ]);
    }
    public function deleteProject($id){
        return DB::table('projects')->where('id','=', $id)->delete();
    }
    public function showProject($id){
        return DB::table('projects')->where('id','=', $id)->first();
    }
    public function projectUpdate(Request $request,$id){
        return DB::table('projects')->where('id','=',$id)->update([
            'title'=>$request->title,
            'previewLink'=>$request->previewLink,
            'thumbnailLink'=>$request->thumbnailLink,
            'details'=>$request->details,
        ]);
    }
}
